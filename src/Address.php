<?php
namespace SmartBear;

class Address
{

    // Get the address
    public function getAddress($address)
    {
        if (!empty ($address['p'])) {
            $post = $address['p'];
        };
        if (!empty ($address['cat'])) {
            $cat = $address['cat'];
        }

        if (empty ($post) && empty ($cat)){
            return "home";
        } elseif (!empty ($post)) {
            return "single";
        } elseif (!empty ($cat)) {
            return "cat";
        }
    }
}
