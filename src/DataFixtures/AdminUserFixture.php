<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdminUserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setUsername('admin');
        $admin->setEmail('admin@allgames.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword('$2y$13$jJG5XKs4ma4qif5hlLu7yuCoQGlbs61bBsCnti5UX9UtdRV0m7ua6');

        $manager->persist($admin);
        $manager->flush();
    }
}
