<?php


namespace App\DataFixtures;


use App\Entity\Task;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Create a user with admin role
 * You should change the password and Email once logged with this account
 * Use "Admin@snowtricks" as email and "Password" as password
 *
 * Class UserFixtures
 * @package App\DataFixtures
 */
class AppFixtures extends Fixture
{

    private $passwordEncoder;

    private $users = [
        [
            'username' => 'Admin',
            'password' => 'adminadmin',
            'email' => 'admin@todolist.com',
            'role' => User::ROLE_ADMIN
        ],
        [
            'username' => 'Evohe',
            'password' => 'password',
            'email' => 'evohe@todolist.com',
            'role' => User::ROLE_USER
        ],
        [
            'username' => 'Sebastien',
            'password' => 'password',
            'email' => 'sebastien@todolist.com',
            'role' => User::ROLE_ADMIN
        ],

    ];

    private $tasks = [
        [
            'title' => 'Task #1',
            'content' => 'Task #1 Content',
            'is_done' => 0,
            'owner' => 'Admin'
        ],
        [
            'title' => 'Task #2',
            'content' => 'Task #2 Content',
            'is_done' => 0,
            'owner' => 'Sebastien'
        ],
        [
            'title' => 'Task #3',
            'content' => 'Task #3 Content',
            'is_done' => 1,
            'owner' => 'Evohe'
        ],
    ];


    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {


        // Adding users
        foreach ($this->users as $object) {
            $user = new User();
            $user->setUsername($object['username']);
            $user->setEmail($object['email']);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $object['password']));
            $user->setRoles([$object['role']]);
            $manager->persist($user);
        }

        $manager->flush();
        
        // Adding Tasks
        foreach ($this->tasks as $object) {
            $task = new Task();
            $task->setTitle($object['title']);
            $task->setContent($object['content']);
            $task->toggle($object['is_done']);
            $owner = $manager->getRepository(User::class)->findOneBy(['username' => $object['owner']]);
            $task->setUser($owner);
            $manager->persist($task);
        }

        $manager->flush();
    }
}