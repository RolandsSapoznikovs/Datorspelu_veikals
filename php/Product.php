<?php

function Product($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-lg-4 mb-3 flex-d align-items-stretch\">
        <form action = \"index.php\" method = \"post\">
            <div class = \"card shadow\">
                <div>
                    <img src = \"$productimg\" alt = \"Product1\" class = \"img-fluid card-img-top\">
                </div>
                <div class = \"card-body\">
                    <h5 class = \"card-title\">$productname</h5>
                    <h5>
                        <span class = \"price\">$$productprice</span>
                    </h5> 
                    <button type = \"submit\" name = \"Buy\" class = \"btn btn-primary my-3\">Buy</button> 
                    <input type = \"hidden\" name = \"product_id\" value = \"$productid\">     
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
}