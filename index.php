<script src="https://use.fontawesome.com/40a93423bf.js"></script>

<style>

.content {
    padding: 20px;
    height: 100%;
    width: 100%;
    background: #efefef;
    text-align: center;
}
.popover__title {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 24px;
    text-decoration: none;
    color: rgb(228, 68, 68);
    text-align: center;
    padding: 15px 0;
}
.popover__wrapper {
    position: relative;
    /*margin-top: 1.5rem;*/
    display: inline-block;
}
.popover__content {
    opacity: 0;
    visibility: hidden;
    position: absolute;
    left: 10px;
    transform: translate(0,10px);
    background-color: #BFBFBF;
    padding: .5rem;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
    width: auto; 
}
.popover__content ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
}
.popover__content ul li {
    display: inline-block;
    margin: 10px;
    font-size: 18px;
}
.popover__content ul li a {
    color: #fff;
}
.popover__content:before {
    position: absolute;
    z-index: -1;
    content: '';
    right: calc(50% - 10px);
    top: -8px;
    border-style: solid;
    border-width: 0 10px 10px 10px;
    border-color: transparent transparent #BFBFBF transparent;
    transition-duration: 0.3s;
    transition-property: transform;
}
.popover__wrapper:hover .popover__content {
    z-index: 10;
    opacity: 1;
    visibility: visible;
    transform: translate(0,-20px);
    transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97);
}
.popover__message {
    text-align: center;
}

</style>


<?php

$social_links = [
    ['icon' => 'facebook', 'link' => 'https://facebook.com'],
    ['icon' => 'twitter', 'link' => 'https://twitter.com'],
    ['icon' => 'pinterest', 'link' => 'https://pinterest.com'],
];

?>


<div class="content">

    <div class="popover__wrapper">
        <h2 class="popover__title">Go-Go Social</h2>
        <div class="push popover__content">
            <ul>
            <?php foreach($social_links as $social) : ?>
                <li><a href="<?php echo $social['link']; ?>" target="_blank"><i class="fa fa-<?php echo $social['icon']; ?>"></i></a></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
