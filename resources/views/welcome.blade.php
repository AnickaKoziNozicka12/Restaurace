@extends('layouts.layout')

@section("content")

    <div class="cards">
        <x-card  src="https://petrstupka.cz/wp-content/uploads/2020/05/svickova-scaled.jpg" label="Svíčková" content="Pečená hovězí svíčková s brusinkami a houskovým knedlíkem" alergen="1,5,3" price="180 Kč"/>
        <x-card  src="https://www.mujchlebicek.cz/content/images/thumbs/0001218_mini-smazeny-kureci-rizek-kg.jpeg" label="Kuřecí řízek" content="Kuřecí řízek s bramborovou kaší" alergen="3" price="150 Kč"/>
        <x-card  src="https://static.albert.cz/medias/sys_master/images/h7b/h65/8950521004062.jpg?buildNumber=39ab000963a0e730c006d06790969c987d53a363ed918c401fb8cf77d68ffc41&imwidth=500" label="Výpečky se špenátem" content="Domácí výpečky se špenátem, HK/BK" alergen="5,3" price="170 Kč"/>
        <x-card  src="https://www.nejrecept.cz/upload/25396204_00fab963c4ee36_full.jpg" label="Smažený sýr" content="Smažený sýr, vařené brambory/hranolky" alergen="10,5,2" price="135 Kč"/>
        <x-card  src="https://www.toprecepty.cz/fotky/recepty/0047/55beea914ae65e30c77bf87a1071a831-facebook.jpg" label="Plněné knedlíky" content="Bramborové knedlíky plněné mletým masem, zelí" alergen="1,3" price="165 Kč"/>
        <x-card  src="https://cdn.administrace.tv/2022/08/06/medium_169/dfdcdd5fa7fc75363b5a904ece840993.jpg" label="Boloňské špagety" content="Boloňské špagety podle receptu strejdy Adama" alergen="5,3" price="150 Kč"/>
    </div>

@endsection