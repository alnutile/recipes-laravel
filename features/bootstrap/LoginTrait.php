<?php

trait LoginTrait
{

    
    public function login($username = false, $password = false)
    {
        $this->visit('login');
        file_put_contents(base_path('tests/fixtures/login_page_no_javascript_before_fail.txt'), $this->getSession()->getPage()->getContent());
        $this->fillField('email', ($username) ? :$this->user->email);
        $this->fillField('password', 'barfoo');
        $this->pressButton('Login');
        sleep(2);
    }
}
