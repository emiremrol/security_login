<?php

namespace App\Http\UserHttpHandler;

use App\Data\ErrorDTO\ErrorDTO;
use App\Data\User\UserDTO;
use App\Http\HttpHandlerAbstract;
use App\Services\UserService\UserServiceInterface;

class UserHttpHandler extends HttpHandlerAbstract
{

    public function index():void
    {
        $this->render("home/index");
    }

    public function register(UserServiceInterface $userService, array $formData = []): void
    {
        if(isset($formData['register'])){
            $this->handleRegisterProcess($userService, $formData);
        }else{
            $this->render("users/register");
        }
    }

    public function login(UserServiceInterface $userService, array $formData = []): void
    {
        if(isset($formData['login'])){
            $this->handleLoginProcess($userService, $formData);
        }else{
            $this->render("users/login");
        }
    }

    public function profile(UserServiceInterface $userService, array $formData = []): void
    {
        if(!$userService->isLogged()){
            $this->redirect("login.php");
        }

        $currentUser = $userService->currentUser();

        if($currentUser->getRoleId() != 1){
             $this->redirect('http://192.168.175.34:82/login');
        }else{
             $this->render("users/profile", $currentUser);
        }


        // $this->redirect('http://192.168.175.34:82/login');

    }


    public function addUser(UserServiceInterface $userService, array $formData = []):void 
    {        
        if(!$userService->isLogged()){
            $this->redirect("login.php");
        }

        $currentUser = $userService->currentUser();
        if($currentUser->getRoleId() != 1){
             $this->redirect('http://192.168.175.34:82/login');
        }

        if(isset($formData['аdd_new'])){
            $this->handleAddUserProcess($userService, $formData);
        }else{
            $this->render("users/addUser");
        }

    }

    private function handleAddUserProcess(UserServiceInterface $userService, array $formData): void
    {
        $user = $this->dataBinder->bind($formData, UserDTO::class);
        if ($userService->register($user, $formData['confirm_password'])) {
            $this->redirect("profile.php");
        } else {
            $this->render("users/addUser", ['error' => new ErrorDTO("Проблем с регистрацията!")]);
        }
    }

    private function handleRegisterProcess($userService, $formData): void
    {
        $user = $this->dataBinder->bind($formData, UserDTO::class);
        $user->setRole(2);
        /**
         * @var UserServiceInterface $userService
         */

        try {
            if($userService->register($user, $formData['confirm_password'])) {
                $this->redirect("login.php");
            }
        }catch (\Exception $e){
            $this->render("users/register", null, new ErrorDTO($e->getMessage()));
        }

    }

    private function handleLoginProcess($userService, $formData): void
    {
        $currentUser = $this->dataBinder->bind($formData, UserDTO::class);

        /**@var UserServiceInterface $userService*/
        try {
            $user = $userService->login($formData['username'], $formData['password']);
            $_SESSION['id'] = $user->getId();
            $this->redirect("profile.php");

        }catch (\Exception $ex){
            $this->render("users/login", $currentUser,
                new ErrorDTO($ex->getMessage()));
        }
    }

}