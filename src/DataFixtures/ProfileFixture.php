<?php

namespace App\DataFixtures;

use App\Entity\Profile;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProfileFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $p=new Profile();
        $p->setRs("Facebook");
        $p->setUrl("www.Facebook.com");
        $manager->persist($p);

        $p1=new Profile();
        $p1->setRs("Twitter");
        $p1->setUrl("www.Twitter.com");
        $manager->persist($p1);

        $p2=new Profile();
        $p2->setRs("Instagram");
        $p2->setUrl("www.Instagram.com");
        $manager->persist($p2);

        $manager->flush();
    }
}
