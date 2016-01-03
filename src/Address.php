<?php
namespace SmartBear;

class Address
{

    // Get the address
    public function getAddress($address)
    {
        // Instance the select class to retrieve the posts from the db
        $select = new DbSelect;

        if (!empty ($address['p'])) {
            $post = $address['p'];
        };

        if (!empty ($address['cat'])) {
            $cat = $address['cat'];
        }

        // Show the home page (list of all the posts)
        if (empty ($post) && empty ($cat)){
            return $select->allPosts();

        // Show the single post
        } elseif (!empty ($post)) {
            return $select->post($post);

        // Show the category page
        } elseif (!empty ($cat)) {
            return "cat";
        }
    }
}
