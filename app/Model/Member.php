<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Member extends AppModel {

    public $hasMany = [
        'Review' => [
            'className' => 'Review'
        ]
      ];

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
        'password_current' =>[
            'required'=> [
                'rule' => 'notBlank',
                'message' => 'パスワードが入力されていません｡',
            ],
            'match' => [
                'rule' => 'checkCurrentPassword',
                'message' => 'パスワードが一致していません'
            ]
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

    public function checkCurrentPassword($check){

        $password = array_values($check)[0];

        $member = $this->findById($this->data['Member']['id']);

        $passwordHasher = new BlowfishPasswordHasher();

        if($passwordHasher->check($password,$member['Member']['password'])){
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