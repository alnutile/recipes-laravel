<?php

trait LoginTrait
{

    
    public function login($username = false, $password = false)
    {
        $this->visit('login');
        $this->fillField('email', ($username) ? :$this->user->email);
        $this->fillField('password', 'barfoo');
        $this->pressButton('Login');
        sleep(2);
        file_put_contents(base_path('tests/fixtures/login_page_no_javascript_after_fail.txt'), $this->getSession()->getPage()->getContent());
    }
}
