<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 7/11/2017
 * Time: 11:36 AM
 */

namespace App\Action;


class StoreObject
{
    private $hours;
    private $address;
    private $state;
    private $email;
    private $map;
    private $title;
    private $phone;

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $map
     */
    public function setMap($map)
    {
        $this->map = $map;
    }

    /**
     * @return mixed
     */
    public function getHours()
    {
        return $this->hours;
    }


    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }


    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @return mixed
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }




}