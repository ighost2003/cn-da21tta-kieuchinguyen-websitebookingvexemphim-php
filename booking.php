<?php 
    include_once("db/connect.php");
    $q = $_GET['theater'];
    $type = $_GET['type'];
    $movie = $_GET['movie'];
    $sql_ticketInfo = mysqli_query($mysqli, "SELECT movie_name,theaters_name,room_name,showings_time 
    FROM `showings`,theaters,room,movie 
    WHERE showings_name_movie = movie_id and showings_room = room_id and room_theater = theaters_id
    and room_theater = '".$q."' and room_name = '".$type."'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .noselect {
        -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
                -ms-user-select: none; /* Internet Explorer/Edge */
                    user-select: none; /* Non-prefixed version, currently
                                        supported by Chrome, Opera and Firefox */
        }
        @media only screen and (max-width: 1366px) {
            .noteTitle {
                margin-bottom: 15px;
                font-weight: bold;
                margin-right: 10px;
                font-size:11px
                }
            .seatNoteA {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;
            }
            .seatNoteB {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(230,202,196);
                color: white;
                font-weight: bold;  
            }

            .seatNoteC {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .rowSeat {
                text-align:center;
                margin-bottom: 40px
            }
            .theaterMap .screen {
            background-color: rgb(240,240,240);
            text-align: center;
            margin-top: 8px;
            margin-bottom: 30px;
            }
            .reserved {
                display: inline;
                padding: 20px;
                font-size: 15.5px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;
            }
            .theaterMap .rowSeat .seats {
                display: inline;
                padding: 20px;
                font-size: 15.5px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .seats:hover {
                background-color: green;
            }
        }
        @media only screen and (max-width: 1198px) {
            .noteTitle {
                margin-bottom: 15px;
                font-weight: bold;
                margin-right: 10px;
                font-size:11px
                }
            .seatNoteA {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;
            }
            .seatNoteB {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(230,202,196);
                color: white;
                font-weight: bold;  
            }
            .seatNoteC {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .rowSeat {
                text-align:center;
                margin-bottom: 35px
            }
            .reserved {
                display: inline;
                padding: 17px;
                font-size: 15.5px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;
            }
            .theaterMap .rowSeat .seats {
                display: inline;
                padding: 17px;
                font-size: 15.5px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .seats:hover {
                background-color: green;
            }
        }
        @media only screen and (max-width: 991px) {
            .noteTitle {
                margin-bottom: 15px;
                font-weight: bold;
                margin-right: 10px;
                font-size:11px
                }
            .seatNoteA {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;
            }
            .seatNoteB {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(230,202,196);
                color: white;
                font-weight: bold;  
            }
            .seatNoteC {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .rowSeat {
                text-align:center;
                margin-bottom: 17px 
            }
            .reserved {
                display: inline;
                padding: 8px;
                font-size: 15.5px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;
            }
            .theaterMap .rowSeat .seats {
                display: inline;
                padding: 8px;
                font-size: 15.5px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .seats:hover {
                background-color: green;
            }
        }
        @media only screen and (max-width: 767px) {
            .noteTitle {
                margin-bottom: 15px;
                font-weight: bold;
                margin-right: 10px;
                font-size:11px
                }
            .seatNoteA {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;
            }
            .seatNoteB {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(230,202,196);
                color: white;
                font-weight: bold;  
            }
            .seatNoteC {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .rowSeat {
                text-align:center;
                margin-bottom: 20px
            }
            .reserved {
                display: inline;
                padding: 12px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;
            }
            .theaterMap .rowSeat .seats {
                display: inline;
                padding: 12px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .seats:hover {
                background-color: green;
            }
        }
        @media only screen and (max-width: 548px) {
            .noteTitle {
                margin-bottom: 15px;
                font-weight: bold;
                margin-right: 10px;
                font-size:11px
                }
            .seatNoteA {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;
            }
            .seatNoteB {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(230,202,196);
                color: white;
                font-weight: bold;  
            }
            .seatNoteC {
                padding: 10px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .rowSeat {
                text-align:center;
                margin-bottom: 15px
            }
            .reserved {
                display: inline;
                padding: 9px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;
            }
            .theaterMap .rowSeat .seats {
                display: inline;
                padding: 9px;
                font-size: 11px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .seats:hover {
                background-color: green;
            }
        }
        @media only screen and (max-width: 375px) {
            .noteTitle {
                margin-bottom: 10px;
                font-weight: bold;
                margin-right: 10px
            }
            .seatNoteA {
                padding: 5px    ;
                font-size: 9px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;
            }
            .seatNoteB {
                padding: 5px;
                font-size: 9px;
                border-radius: 5px;
                background-color: rgb(230,202,196);
                color: white;
                font-weight: bold;  
            }
            .seatNoteC {
                padding: 5px;
                font-size: 9px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .rowSeat {
                text-align:center;
                margin-bottom: 3px
            }
            .reserved {
                display: inline;
                padding: 5px;
                font-size: 9px;
                border-radius: 5px;
                background-color: rgb(71,43,52);
                color: white;
                font-weight: bold;
            }
            .theaterMap .rowSeat .seats {
                display: inline;
                padding: 5px;
                font-size: 9px;
                border-radius: 5px;
                background-color: rgb(185,222,160);
                color: white;
                font-weight: bold;  
            }
            .theaterMap .seats:hover {
                background-color: green;
            }
        }
    </style>
</head>
<body>
<div class="theaterMap col">
    <?php
        while($row_ticketInfo = mysqli_fetch_array($sql_ticketInfo)){
    ?>
    <div class="ticket-info">
        <div>Phim: <span><?php echo $row_ticketInfo['movie_name'];?></span></div>
        <div>Suất Chiếu: <span><?php echo $row_ticketInfo['showings_time'];?></span></div>
        <div>Rạp: <span><?php echo $row_ticketInfo['theaters_name'];?></span></div>
        <div>Phòng: <span><?php echo $row_ticketInfo['room_name'];?></span></div>
    </div>
    <?php } ?>
    <div class="screen">SCREEN</div>
    <?php
        $sql_seatRow = mysqli_query($mysqli, "SELECT DISTINCT seat_row from seat,room,theaters,showings, movie
        WHERE seat.seat_room = room.room_id and room.room_theater = theaters.theaters_id and theaters.theaters_id = '".$q."' 
        and room.room_name='".$type."' and showings_name_movie = movie_id and movie_name = '".$movie."'");
        while($row_seatRow = mysqli_fetch_array($sql_seatRow)){
    ?>
    <div class="rowSeat">
    <?php
        $sql_seat = mysqli_query($mysqli, "SELECT seat_name,seat_status FROM seat,room,theaters WHERE seat_room = room.room_id AND room.room_theater = theaters.theaters_id and seat_row = '".$row_seatRow['seat_row']."' and theaters.theaters_id = '".$q."' and room.room_name = '".$type."'");
        while($row_seat = mysqli_fetch_array($sql_seat)){
    ?>
        <div class="<?php if($row_seat['seat_status'] == 1) echo "reserved"; else echo "seats"?> noselect"><?php echo $row_seat['seat_name']?></div>
        <?php } ?>
    </div>
    <?php 
    }
    ?>
    <div class="note">
        <div class = "noteTitle">Ghi Chú:</div>
        <div class="seatNoteA noselect" style= "display: inline">A1</div>
        <div class="noselect noteTitle" style= "display: inline">Ghế còn trống</div>
        <div class="seatNoteB noselect" style= "display: inline">A1</div>
        <div class="noselect noteTitle" style= "display: inline">Ghế đang chọn</div>
        <div class="seatNoteC noselect" style= "display: inline">A1</div>
        <div class="noselect noteTitle" style= "display: inline">Ghế đã được đặt</div>
    </div>
</div>
<script>
$(document).ready(function () {
    $(".seats").click(function (event) {
        var color = $(event.target).css("background-color");
        if(color === "rgb(230, 202, 196)"){
            $(this).css("background-color", "rgb(185,222,160)");
        }
        else{
            $(this).css("background-color", "rgb(230,202,196)");
        }
    });
});
</script>
</body>
</html>