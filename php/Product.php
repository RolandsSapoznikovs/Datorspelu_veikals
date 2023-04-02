<?php

function Product($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-lg-4 mb-3 flex-d align-items-stretch\">
        <form action = \"Product_details.php?product=$productid\" method = \"POST\">
            <div class = \"card shadow\">
                <div>
                    <img src = \"$productimg\" alt = \"Product1\" class = \"img-fluid card-img-top\">
                </div>
                <div class = \"card-body\">
                    <h5 class = \"card-title\">$productname</h5>
                    <h5>
                        <span class = \"price\">$$productprice</span>
                    </h5> 
                    <button type = \"submit\" name = \"View\" class = \"btn btn-primary my-3\">View</button> 
                    <input type = \"hidden\" name = \"product_id\" value = \"$productid\">     
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
}

function ProductDetails($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"\" id = \"PMain\">
        <form action = \"Product_details.php?product=$productid\" method = \"POST\">
                <div class = \"float-left\" id = \"PImage\">
                    <img src = \"$productimg\" alt = \"Product1\" class = \"float-left\">
                </div>
                <div class = \"float-left\" id = \"PDesc\">
                    <h5 class = \"float-left\">$productname</h5>
                    <h5>
                        <span class = \"price float-left\">$$productprice</span>
                    </h5> 
                    <input type = \"hidden\" name = \"product_id\" value = \"$productid\">     
                </div>
            </div>
            <button id = \"BuyBtn\" type = \"submit\" name = \"Buy\" class = \"btn btn-primary my-3\">Buy</button> 
        </form>
    </div>
    <div id = \"Reviews\">
    <h5> Reviews </h5>
    </div>
    ";
    echo $element;
}