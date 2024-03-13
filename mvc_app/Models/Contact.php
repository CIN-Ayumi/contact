<?php
require_once(ROOT_PATH.'Controllers/Controller.php');
require_once(ROOT_PATH . 'Models/Db.php');

date_default_timezone_set('Asia/Tokyo');

class Contact extends Db{

  public function __construct($dbh = null)
    {
        parent::__construct($dbh);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

  /*
   * お問い合わせ機能 
   * @param string $name 氏名
   * @param string $kana フリガナ
   * @param string $tel 電話番号
   * @param string $email メールアドレス
   * @param string $body お問い合せ内容
   * @param string $created_at 送信日時
   */

   //問い合わせ新規登録
   public function create(string $name, string $kana, string $tel, string $email, string $body)
   {
    try{
      //SQL文準備
      $this->dbh->beginTransaction();
      $query = 'INSERT INTO contacts (name, kana, tel, email, body, created_at) VALUES (:name, :kana, :tel, :email, :body, :created_at)';
      $stmt = $this->dbh->prepare($query);
      
      //バインド
      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':kana', $kana, PDO::PARAM_STR);
      $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':body', $body, PDO::PARAM_STR);
      $stmt->bindParam(':created_at', date('Y/m/d H:i:s'), PDO::PARAM_STR);
      $stmt->execute();
      $lastId = $this->dbh->lastInsertId();
      
      //SQL実行
      $this->dbh->commit();

      return $lastId;

    } catch(PDOException $e) {
            // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
            $this->dbh->rollBack();
            echo "登録失敗: " . $e->getMessage() . "\n";
            exit();
    }
  }

  //お問い合せ内容の参照
  public function getContacts()
  {
    try{
      $query = 'SELECT * FROM contacts';
      $stmt = $this->dbh->prepare($query);
      $stmt->execute();
      $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($contacts as & $contact) {
        $row['body'] = nl2br($contact['body']);
        }

      return $contacts;

    } catch (PDOException $e) {
            echo 'エラー';
            exit();
    }
  }

  //特定のidの内容をお問い合せ編集画面に表示する
   public function getMyContact(string $id)
   {
      try{
       $this->dbh->beginTransaction();
       $query = 'SELECT * FROM contacts WHERE id = :id'; 
       $stmt = $this->dbh->prepare($query);
       $stmt->bindParam(':id', $id, PDO::PARAM_STR);
       $stmt->execute();
       $myContact = $stmt->fetch(PDO::FETCH_ASSOC);

      return $myContact;

      } catch(PDOException $e) {
        // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
        $this->dbh->rollBack();
        echo "登録失敗: " . $e->getMessage() . "\n";
        exit();
      }
    }


  //更新内容をDBに送信
  public function update(string $id, string $name, string $kana, string $tel, string $email, string $body)
  {
    try{
      //SQL文の準備
      $this->dbh->beginTransaction();
      $query = 'UPDATE contacts SET name = :name, kana = :kana, tel = :tel, email = :email, body = :body, created_at = :created_at WHERE id = :id';
      $stmt = $this->dbh->prepare($query);

      //パラメータをバインド
      $created_at = date('Y/m/d H:i:s');
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':kana', $kana);
      $stmt->bindParam(':tel', $tel);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':body', $body);
      $stmt->bindParam(':created_at', $created_at);
      $stmt->execute();

      $this->dbh->commit();

      return;

    } catch(PDOException $e) {
        // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
        $this->dbh->rollBack();
        echo "送信失敗: " . $e->getMessage() . "\n";
        exit();
    }
  }

  //問い合わせ内容の削除処理
  public function delete(string $id)
  {
    try{
      //SQL文の用意
      $this->dbh->beginTransaction();
      $query = 'DELETE FROM contacts WHERE id = :id';
      $stmt = $this->dbh->prepare($query);
      $stmt->bindParam(':id', $id);
      $stmt->execute();

      $this->dbh->commit();
      return;
      
    } catch(PDOException $e) {
        // 不具合があった場合トランザクションをロールバックして変更をなかったコトにする。
        $this->dbh->rollBack();
        echo "削除失敗: " . $e->getMessage() . "\n";
        exit();
    }
  }
}
