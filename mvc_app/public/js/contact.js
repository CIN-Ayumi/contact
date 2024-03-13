"use strict";
//バリデーション
// 氏名 id="checkName" class="blank"
// →class="nameLength blankAttention"

// フリガナ id="checkKana" class="blank"
// →class="kanaLength blankAttention"

// 電話番号 id="checkTel" 
// →class="telAttention"

// メールアドレス id="checkEmail" class="blank"
// →class="blankAttention emailAttention"

// お問い合せ内容 id="checkBody" class="blank"
// → class="blankAttention"

//10文字チェックの関数定義
function lengthCheck(check, length, text){
  check.addEventListener('input',() => {
  const attentionPoint = check.value.length;
  if(attentionPoint > 10){
    length.textContent = text + 'は10文字以内です。';
  } else{
    length.textContent = '';
  }
}, false);
}

//氏名文字数チェック
const checkName = document.querySelector('#checkName') ;
const nameLength = document.querySelector('.nameLength');
lengthCheck(checkName, nameLength, '氏名');

//フリガナ文字数チェック
const checkKana = document.querySelector('#checkKana');
const kanaLength = document.querySelector('.kanaLength');
lengthCheck(checkKana, kanaLength, 'フリガナ');

//空チェック
const blanks = document.querySelectorAll('.blank');
const blankAttentions = document.querySelectorAll('.blankAttention');
blanks.forEach(function(blank, index) {
  blank.addEventListener('input', () => {
    const attention = blank.value.trim().length;
    if (attention > 0) {
      blankAttentions[index].textContent = '';
    } else {
      switch(index){
        case 0:
          blankAttentions[0].textContent = '氏名は必須入力です';
          break;
        case 1:
          blankAttentions[1].textContent = 'フリガナは必須入力です'
          break;
        case 2:
          blankAttentions[2].textContent = 'メールアドレスは必須入力です';
          break;
        case 3:
          blankAttentions[3].textContent = 'お問い合わせ内容は必須入力です';
      }
    }
  }, false);
});


//電話番号チェック
//半角数字チェック
function isHalfWidthNumber(input) {
  return /^[0-9]+$/.test(input);
}

//半角でなければ注意喚起
const tel = document.querySelector('#checkTel');
const telAttention = document.querySelector('.telAttention');
tel.addEventListener('input', () => {
  const inputValue = tel.value;
  if(isHalfWidthNumber(inputValue) || inputValue.length === 0){
    telAttention.textContent = '';
} else {
  telAttention.textContent = '半角数字で入力して下さい';
};
}, false);


//メールアドレス
// メールアドレスの形式をチェックする関数を定義
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

//メールアドレスが正しくなければ注意喚起
const checkEmail = document.querySelector('#checkEmail');
const emailAttention = document.querySelector('.emailAttention');
checkEmail.addEventListener('input', () => {
    if(isValidEmail(checkEmail.value)){
      emailAttention.textContent = '';
    } else {
      emailAttention.textContent = 'メールアドレスには「＠」を含む形式で入力して下さい';
    }
}, false);

//すべて入力された時のみ画面推移
const form = document.querySelector("#contactForm");
form.addEventListener('submit', function(event){
  const e1 = nameLength.textContent.trim().length;
  const e2 = kanaLength.textContent.trim().length;
  let e3 = 0; // 初期化
  blankAttentions.forEach((blankAttention) => {
    e3 += blankAttention.textContent.trim().length;
  });
  const e4 = telAttention.textContent.trim().length;
  const e5 = emailAttention.textContent.trim().length;

  if (e1 === 0 && e2 === 0 && e3 === 0 && e4 === 0 && e5 === 0) {
  } else {
    event.preventDefault(); // フォームの送信をキャンセル
  }
});

