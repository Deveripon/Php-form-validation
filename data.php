<?php

$products =[
    [
        "name" => "T-shirt",
        "price" => 150,
        "slae_price" => 100,
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, cupiditate.",
        "photo" => "https://99designs-blog.imgix.net/blog/wp-content/uploads/2016/12/attachment_89561603-e1513587105243.jpg?auto=format&q=60&fit=max&w=930",
        "stock" => 100,

    ],
    [
        "name" => "T-shirt",
        "price" => 150,
        "slae_price" => 100,
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, cupiditate.",
        "photo" => "https://99designs-blog.imgix.net/blog/wp-content/uploads/2016/12/attachment_89561603-e1513587105243.jpg?auto=format&q=60&fit=max&w=930",
        "stock" => 100,

    ],
    [
        "name" => "T-shirt",
        "price" => 150,
        "slae_price" => 100,
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, cupiditate.",
        "photo" => "https://99designs-blog.imgix.net/blog/wp-content/uploads/2016/12/attachment_89561603-e1513587105243.jpg?auto=format&q=60&fit=max&w=930",
        "stock" => 100,

    ],
    [
        "name" => "T-shirt",
        "price" => 150,
        "slae_price" => 100,
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, cupiditate.",
        "photo" => "https://99designs-blog.imgix.net/blog/wp-content/uploads/2016/12/attachment_89561603-e1513587105243.jpg?auto=format&q=60&fit=max&w=930",
        "stock" => 100,

    ],
    [
        "name" => "T-shirt",
        "price" => 150,
        "slae_price" => 100,
        "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, cupiditate.",
        "photo" => "https://99designs-blog.imgix.net/blog/wp-content/uploads/2016/12/attachment_89561603-e1513587105243.jpg?auto=format&q=60&fit=max&w=930",
        "stock" => 100,

    ],
    

];




$product_json =  json_encode($products);

$decoded_json = json_decode($product_json,false);

// echo "<pre>";
// print_r($decoded_json);
// echo "</pre>";