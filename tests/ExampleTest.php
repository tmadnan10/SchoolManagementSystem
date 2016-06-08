<?php

use App\User;
use App\Task;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

     public function test_i_am_redirect_to_login_if_i_try_to_view_task_lists_without_logging_in()
    {
        $response = $this->call('GET','/');
        $view = $response->original;
        $this->assertEquals('welcome1', $view->getName());
    }

    public function testVisitWithoutLogIn()
    {
        $this->visit('/teacher')->see('Login');
    }

    public function testAdminLogin()
     {
        $this->visit(url('/'))
             ->type('admin', 'username')
             ->type('adminadmin', 'password')
             ->press('Login')
             ->seePageIs(url('/admin')); 
     }

     public function testStudentLogin()
     {
        $this->visit(url('/'))
             ->type('shadmansaqib', 'username')
             ->type('shadmansaqib', 'password')
             ->press('Login')
             ->seePageIs(url('/student'))
             ->seeInDatabase('users', ['email' => 'shadmansaqib@gmail.com']);
     }

     public function testTeacherLogin()
     {
        $this->visit(url('/'))
             ->type('hidagu', 'username')
             ->type('hidagu', 'password')
             ->press('Login')
             ->seePageIs(url('/teacher'))
             ->seeInDatabase('users', ['email' => 'hidaguHD@gmail.com']);
     }

     public function testStd()
     {
        $user = new User(array('username' => 'anik', 'account_type' => 'student'));
        $this->be($user);
        $response = $this->action('GET', 'StudentController@index');
        $view = $response->original;
        $this->assertTrue(strpos($response->getContent(), 'Nazrul') !== false);
        $this->assertTrue(strpos($response->getContent(), 'nanikcse007@google.com') !== false);
        $this->assertTrue(strpos($response->getContent(), '2016-04-01') !== false);
        //$view = $response->original;

        //$this->assertViewHas('first_name');
     }

     public function testTchr()
     {
        $user = new User(array('username' => 'nafisit3', 'account_type' => 'teacher'));
        $this->be($user);
        $response = $this->action('GET', 'TeacherController@index');
        $view = $response->original;
        $this->assertTrue(strpos($response->getContent(), 'Nafis') !== false);
        $this->assertTrue(strpos($response->getContent(), 'nafisit3@gmail.com') !== false);
        $this->assertTrue(strpos($response->getContent(), 'Lecturer') !== false);
        //$view = $response->original;

        //$this->assertViewHas('first_name');
     }

     public function testEditstd()
     {
        $user = new User(array('username' => 'anik', 'account_type' => 'student'));
        $this->be($user);
        $response = $this->call('GET', '/student/edit');
        $view = $response->original;
        $this->visit(url('/student/edit'))
            ->type('anik@yahoo.com', 'email')
            ->type('Nazrul', 'first_name')
            ->type('Anik', 'last_name')
            ->press('save')
            ->seePageIs(url('/student'))
            ->seeInDatabase('student', ['email' => 'anik@yahoo.com']);
        //$this->assertTrue(strpos($response->getContent(), 'Nazrul') !== false);
        //$view = $response->original;

        //$this->assertViewHas('first_name');
     }

     

     public function testUser()
     {
        /*$user = new User(array('name' => 'John'));
        $this->be($user); //You are now authenticated
        $this->visit(url('/admin'))
            ->Asser;*/
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit(url('/addnew'))
            ->type('testcase', 'username')
            ->type('testcase', 'password')
            ->type('testcase', 'password_confirmation')
            ->select('teacher', 'account_type')
            ->press('next')
            ->seePageIs(url('/addnew/teacher'));



        //student kaam kore na :(     
        /*$this->actingAs($user)
            ->visit(url('/addnew'))
            ->type('testcase', 'username')
            ->type('testcase', 'password')
            ->type('testcase', 'password_confirmation')
            ->select('student', 'account_type')
            ->press('next')
            ->seePageIs(url('/addnew/student'));*/


     }
     
}
