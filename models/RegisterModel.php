<?php 
namespace app\models;
use app\core\Model;

class RegisterModel extends Model
{
    public string $firstname ='';
    public string $lastname ='';
    public string $email ='';
    public string $pwd ='';
    public string $confirmPwd ='';

    public function register(){
        echo 'Creating new user';
    }

    public function rule(): array
    {

        return [
            'firstname'  => [self::RULE_REQUIRED],
            'lastname'   => [self::RULE_REQUIRED],
            'email'      => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'pwd'        => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
            'confirmPwd' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'pwd']],
        ];
    }
}
