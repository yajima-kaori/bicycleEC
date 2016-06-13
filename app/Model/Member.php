<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Member extends AppModel {
    public $validate = [
        'email' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => 'メールアドレスを入力してください'
            ],
            'validEmail' => [
                'rule' => 'email',
                'message' => '正しいメールアドレスを入力してください'
            ],
            'emailExists' => [
                'rule' => ['isUnique', 'email'],
                'message' => '入力されたメールアドレスは既に登録されています'
            ],
        ],
        'password' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => 'パスワードを入力してください'
            ],
            // バリデーションにメソッドを指定
            'match' => [
                'rule' => 'passwordConfirm',
                'message' => 'パスワードが一致していません'
            ],
        ],
        'password_confirm' => [
            'required' => [
                'rule' => 'notBlank',
                'message' => 'パスワード(確認)を入力してください'
            ],
        ],
    ];

    // カスタムバリデーションメソッド
    public function passwordConfirm($check) {

        // $check は ['password' => '入力された値']
        if ($check['password'] === $this->data['Member']['password_confirm']) {
            return true;
        }

        return false;
    }

    public function beforeSave($options = []) {

        // パスワードをハッシュ化
        if (isset($this->data['Member']['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();

            $this->data['Member']['password'] = $passwordHasher->hash($this->data['Member']['password']);
        }

        return true;
    }


}