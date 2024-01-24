@extends('layouts.layout')

@section("content")

    <div class="cards">
        <x-card  src="https://petrstupka.cz/wp-content/uploads/2020/05/svickova-scaled.jpg" label="Svíčková" content="Pečená hovězí svíčková s brusinkami a houskovým knedlíkem" alergen="1,5,3" price="180 Kč"/>
        <x-card  src="https://petrstupka.cz/wp-content/uploads/2020/05/svickova-scaled.jpg" label="Kuřecí řízek" content="Kuřecí řízek s bramborovou kaší" alergen="3" price="150 Kč"/>
        <x-card  src="https://petrstupka.cz/wp-content/uploads/2020/05/svickova-scaled.jpg" label="Výpečky se špenátem" content="Domácí výpečky se špenátem, HK/BK" alergen="5,3" price="170 Kč"/>
        <x-card  src="https://petrstupka.cz/wp-content/uploads/2020/05/svickova-scaled.jpg" label="Smažený sýr" content="Smažený sýr, vařené brambory/hranolky" alergen="10,5,2" price="135 Kč"/>
        <x-card  src="https://petrstupka.cz/wp-content/uploads/2020/05/svickova-scaled.jpg" label="Plněné knedlíky" content="Bramborové knedlíky plněné mletým masem, zelí" alergen="1,3" price="165 Kč"/>
        <x-card  src="https://petrstupka.cz/wp-content/uploads/2020/05/svickova-scaled.jpg" label="Boloňské špagety" content="Boloňské špagety podle receptu strejdy Adama" alergen="5,3" price="150 Kč"/>
    </div>

@endsection