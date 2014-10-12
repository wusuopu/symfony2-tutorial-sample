<?php

namespace Blogger\BlogBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blogger\BlogBundle\Entity\User;

/**
 * UserFixtures
 */
class UserFixtures extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName("someuser");
        $user->setEmail("someuser@mail.ca");
        $manager->persist($user);
        $manager->flush();
        $this->addReference('user-1', $user);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}
