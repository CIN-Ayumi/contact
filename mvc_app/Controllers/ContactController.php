<?php
require_once(ROOT_PATH.'Controllers/Controller.php');
require_once (ROOT_PATH . 'Models/User.php');
require_once (ROOT_PATH. 'Models/Contact.php');
class ContactController extends Controller
{

  //電話番号半角数字チェックの関数定義
  public static function isHalfWidthNumber($input) {
    return preg_match('/^[0-9]+$/', $input);
  }

  //メールアドレスの形式を判定する関数定義
  public static function isValidEmail($email) {
    $emailRegex = '/^[^\s@]+@[^\s@]+[^\s@]+$/';
    return preg_match($emailRegex, $email);
  }

    //入力画面
  public function contact(){   
    $contact = new Contact;
    $contacts = $contact->getContacts();
    $keepText[] = '';
    $this->view('contact/index',['contacts' => $contacts, 'keepText' => $keepText]);
  }

    //確認画面
  public function formInput(){
    //直接アクセスした場合はお問い合せトップへ戻る
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
      header('Location: /contact/index');
      exit();
    }
      $errorMessages = [];
      $keepText = [];

      $name = htmlspecialchars($_POST['contactName']);
      $kana = htmlspecialchars($_POST['contactKana']);
      $tel = htmlspecialchars($_POST['contactTel']);
      $email = htmlspecialchars($_POST['contactEmail']);
      $body = htmlspecialchars($_POST['contactBody']);

      if(empty($name)){
        $errorMessages['name'] = '氏名は必須入力です。';
      } else { 
        $keepText['name'] = $name;
      }

      if(empty($kana)){
        $errorMessages['kana'] = 'フリガナは必須入力です。';
      } else {
        $keepText['kana'] = $kana;
      }

      if(empty($email)){
        $errorMessages['email_1'] = 'メールアドレスは必須入力です。';
      } else {
        $keepText['email'] = $email;
      }

      if(empty($body)){
        $errorMessages['body'] = 'お問い合わせ内容は必須入力です。';
      } else {
        $keepText['body'] = $body;
      }

      if (!empty($tel)) {
        $input = $tel;
        if (!ContactController::isHalfWidthNumber($input)) {
            $errorMessages['tel'] = '半角数字で入力してください。';
            $keepText['tel'] = $tel;
        }
      }
        
      if (!empty($email)) {
        $inputEmail = $email;
        if (!ContactController::isValidEmail($inputEmail)) {
            $errorMessages['email_2'] = 'メールアドレスには「＠」を含む形式で入力して下さい';
        } 
      }

      if (!empty($errorMessages)){
        //バリデーション失敗
        $_SESSION['errorMessages'] = $errorMessages;
        $_SESSION['post'] = $_POST;
        $contact = new Contact;
        $contacts = $contact->getContacts();  
        // header('Location: /index');
        $this->view('contact/index', ['errorMessages' => $errorMessages, 'keepText' => $keepText, 'contacts' => $contacts]);
  
      } else { //バリデーション成功
        $this->view('contact/form-input', 
        ['name' => $name,
          'kana' => $kana,
          'tel' => $tel,
          'email' => $email,
          'body' => $body
        ]);
      }
    }

  //入力完了画面
  public function formOutput(){

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
      header('Location: /contact/index');
      exit();
    }

    $errorMessages = [];
    if (empty($_POST['name'])) {
      $errorMessages['name'] = '氏名を入力してください。';
    }
    if (count($_POST['name']) > 10 ) {
      $errorMessages['nameCount'] = '氏名は10文字以内です。';
    } else {
      $contact = new Contact;
      $result = $contact->create(
          $_POST['name'],
          $_POST['kana'],
          $_POST['tel'],
          $_POST['email'],
          $_POST['body']
      );
      $this->view('contact/form-output');
    }
  }



  //更新内容入力画面
  public function ContactUpdate(){
    //直接アクセスした場合はお問い合せトップへ戻る
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
      header('Location: /contact/index');
      exit();
    }
      
    //取得したIDに基づいたデータをDBから取得
    $contact = new Contact;
    $myContact = $contact->getMyContact($_POST['id']);
    $this->view('contact/update', ['myContact' => $myContact]);
  }

  //問い合わせ内容更新
  public function UpdateConpleted(){
    $errorMessages = [];

    $name = htmlspecialchars($_POST['name']);
    $kana = htmlspecialchars($_POST['kana']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $body = htmlspecialchars($_POST['body']);

    if(empty($name)){
      $errorMessages['name'] = '氏名は必須入力です。';
    }

    if(empty($kana)){
      $errorMessages['kana'] = 'フリガナは必須入力です。';
    }

    if(empty($email)){
      $errorMessages['email_1'] = 'メールアドレスは必須入力です。';
    }

    if(empty($body)){
      $errorMessages['body'] = 'お問い合わせ内容は必須入力です。';
    } 

    if (!empty($tel)) {
      $input = $tel;
      if (!ContactController::isHalfWidthNumber($input)) {
          $errorMessages['tel'] = '半角数字で入力してください。';
      }
    }
      
    if (!empty($email)) {
      $inputEmail = $email;
      if (!ContactController::isValidEmail($inputEmail)) {
          $errorMessages['email_2'] = 'メールアドレスには「＠」を含む形式で入力して下さい';
      } else {
      }
    }
      
    if (!empty($errorMessages)){
      //バリデーション失敗
      $_SESSION['errorMessages'] = $errorMessages;
      $_SESSION['post'] = $_POST;
      // header('Location: /index');
      
      $this->view('contact/update', [ 'errorMessages' => $errorMessages]);
    } else {

      //DBに更新内容の送信
      $contact = new Contact;
      $result = $contact->update(
        $_POST['id'],
        $_POST['name'],
        $_POST['kana'],
        $_POST['tel'],
        $_POST['email'],
        $_POST['body']
      );
      
      //内容再取得、入力画面に戻る
      $ContactController = new ContactController;
      $contactUpdate = $this->contact();  
    }
  }

  //問い合わせ内容を削除する
  public function ContactDelete(){
    $contact = new Contact;
    $result = $contact->delete($_POST['id']);

    //内容再取得、入力画面に戻る
    $ContactController = new ContactController;
    $contactUpdate = $this->contact();
  }
}