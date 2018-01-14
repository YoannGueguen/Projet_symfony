<?php
/**
 * Created by PhpStorm.
 * User: Antoine KERIBIN
 * Date: 14/01/2018
 * Time: 23:13
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\user;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user1 = new user();//utilisateur lamba
        $user1->setRoles(['ROLE_USER']);
        $user1->setUsername('Rémy');
        $user1->setEmail('remy.user@gmail.com');
        $user1->setPlainPassword('test');
        $user2 = new user();//utilisateur lamba
        $user2->setRoles(['ROLE_USER']);
        $user2->setUsername('Guillaume');
        $user2->setEmail('guillaume.user@gmail.com');
        $user2->setPlainPassword('test');
        $manager1 = new user();//manager
        $manager1->setRoles(['ROLE_MANAGER']);
        $manager1->setUsername('Anthony');
        $manager1->setEmail('anthony.manager@gmail.com');
        $manager1->setPlainPassword('test');
        $admin = new user();//admin (gestion users)
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setUsername('Julien');
        $admin->setEmail('julien.admin@gmail.com');
        $admin->setPlainPassword('test');
        $superadmin = new user();//accès à tout
        $superadmin->setRoles(['ROLE_PREVIOUS_ADMIN']);
        $superadmin->setUsername('Espion');
        $superadmin->setEmail('espion@gmail.com');
        $superadmin->setPlainPassword('test');

        $manager->persist(user1);

        $manager->flush();
    }
}