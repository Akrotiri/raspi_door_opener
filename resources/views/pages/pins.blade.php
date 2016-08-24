@extends('main')

@section('content')
    <h1><img src="/pinout-logo.png" style="top:8px;" /><span>Pi</span>n<span class="out">ler</span></h1>
    <ul class="legend expansion">
        <li>Genişletme boardları -></li>
        <li class="legend_wiringpi"><a title="WiringPi" href="/wiringpi">WiringPi</a></li>
        <!--li class="legend_ladder"><a title="Ladder Board" href="/ladder">Ladder</a></li-->
        <li class="legend_ledborg"><a title="PiBorg LedBorg RGB LED Board" href="/ledborg">LedBorg</a></li>
        <li class="legend_clockatoo"><a title="GeekRoo Clockatoo" href="/clockatoo">Clockatoo</a></li>
        <li class="legend_atmega" data-pins="19,21,23,24,26"><a title="ATmega 328p/Arduino" href="/atmega328-arduino">ATmega 328</a></li>
    </ul>
    <ul class="legend">
        <li>Buraya Tıklayın -></li>
        <li class="legend_5" data-pins="2,4"><a title="5v Power" href="/5v-power">+5v</a></li>
        <li class="legend_3" data-pins="1,17"><a title="3.3v Power" href="/3v3-power">+3.3v</a></li>
        <li class="legend_ground" data-pins="6,9,14,20,25,30,34,39"><a title="0v Ground" href="/0v-ground">GND, 0v</a></li>
        <li class="legend_uart" data-pins="8,10"><a title="UART" href="/uart">UART</a></li>
        <li class="legend_gpio" data-pins="7,11,12,13,15,16,18,22"><a title="GPIO" href="/gpio">GPIO</a></li>
        <li class="legend_spi" data-pins="19,21,23,24,26"><a title="SPI" href="/spi">SPI</a></li>
        <li class="legend_i2c" data-pins="3,5,27,28"><a title="I2C" href="/i2c">I<sup>2</sup>C</a></li>
        <li class="legend_pwm" data-pins="35,33,32,12"><a title="PWM" href="/pwm">PWM</a></li>
    </ul>

    <nav id="gpio">
        <div id="pinbase"></div>
        <div id="pinbasebplus"></div>
        <ul class="bottom">
            <li class="pin1"><a href="/pin1_3v3_power">
                    <span class="default"><span class="phys">1</span> 3v3 Güç</span> <span class="pin"></span></a></li>
            <li class="pin3 i2c"><a href="/pin3_gpio0">
                    <span class="default"><span class="phys">3</span> GPIO 0 <small>(SDA)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 8</span>
                    <span class="alternate legend_ladder">8: Küçük Yeşil LED</span>
                    <span class="pin"></span></a></li>
            <li class="pin5 iwc"><a href="/pin5_gpio1">
                    <span class="default"><span class="phys">5</span> GPIO 1 <small>(SCL)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 9</span>
                    <span class="alternate legend_ladder">9: Small Red LED</span> <span class="pin"></span></a></li>
            <li class="pin7"><a href="/pin7_gpio4">
                    <span class="default"><span class="phys">7</span> GPIO 4 <small>(GPCLK0)</small></span>
                    <span class="alternate legend_clockatoo">Clockatoo Buzzer</span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 7</span>
                    <span class="alternate legend_ladder">7: Blue LED 2</span> <span class="pin"></span></a></li>
            <li class="pin9"><a href="/pin9_ground">
                    <span class="default"><span class="phys">9</span> GND</span>
                    <span class="pin"></span></a></li>
            <li class="pin11"><a href="/pin11_gpio17">
                    <span class="default"><span class="phys">11</span> GPIO 17</span>
                    <span class="alternate legend_ledborg">WiringPi Pin 0</span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 0</span>
                    <span class="alternate legend_ladder">0: Red LED 1</span> <span class="pin"></span></a></li>
            <li class="pin13"><a href="/pin13_gpio21">
                    <span class="default"><span class="phys">13</span> GPIO 27 <small>(PCM_D)</small></span>
                    <span class="alternate legend_ledborg">WiringPi Pin 2</span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 2</span>
                    <span class="alternate legend_ladder">2: Yellow LED 1</span>
                    <span class="pin"></span></a></li>
            <li class="pin15"><a href="/pin15_gpio22">
                    <span class="default"><span class="phys">15</span> GPIO 22</span>
                    <span class="alternate legend_ledborg">WiringPi Pin 3</span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 3</span>
                    <span class="alternate legend_ladder">3: Yellow LED 2</span>
                    <span class="pin"></span></a></li>
            <li class="pin17"><a href="/pin17_3v3_power">
                    <span class="default"><span class="phys">17</span> 3v3 Power</span>
                    <span class="pin"></span></a></li>
            <li class="pin19 spi"><a href="/pin19_gpio10">
                    <span class="default"><span class="phys">19</span> GPIO 10 <small>(MOSI)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 12</span>
                    <span class="alternate legend_ladder">12: Button 3</span>
                    <span class="pin"></span></a></li>
            <li class="pin21 spi"><a href="/pin21_gpio9">
                    <span class="default"><span class="phys">21</span> GPIO 9 <small>(MISO)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 13</span>
                    <span class="alternate legend_ladder">13: Button 4</span>
                    <span class="pin"></span></a></li>
            <li class="pin23 spi"><a href="/pin23_gpio11">
                    <span class="default"><span class="phys">23</span> GPIO 11 <small>(SCKL)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 14</span>
                    <span class="pin"></span></a></li>
            <li class="pin25"><a href="/pin25_ground">
                    <span class="default"><span class="phys">25</span> GND</span>
                    <span class="pin"></span></a></li>


            <!-- B+ -->
            <li class="pin27 bplus"><a href="/pin27_id_sd"><span class="default"><span
                                class="phys">27</span> ID_SD</span> <span class="pin"></span></a></li>
            <li class="pin29 bplus"><a href="/pin29_gpio5"><span class="default"><span
                                class="phys">29</span> GPIO 5</span> <span class="pin"></span></a></li>
            <li class="pin31 bplus"><a href="/pin31_gpio6"><span class="default"><span
                                class="phys">31</span> GPIO 6</span> <span class="pin"></span></a></li>
            <li class="pin33 bplus"><a href="/pin33_gpio13"><span class="default"><span
                                class="phys">33</span> GPIO 13</span> <span class="pin"></span></a></li>
            <li class="pin35 bplus"><a href="/pin35_gpio19"><span class="default"><span class="phys">35</span> GPIO 19 (MISO)</span>
                    <span class="pin"></span></a></li>
            <li class="pin37 bplus"><a href="/pin37_gpio26"><span class="default"><span
                                class="phys">37</span> GPIO 26</span> <span class="pin"></span></a></li>
            <li class="pin39 bplus"><a href="/pin39_ground"><span class="default"><span
                                class="phys">39</span> GND</span> <span class="pin"></span></a></li>
            <!-- /B+ -->


        </ul>
        <ul class="top">
            <li class="pin2"><a href="/pin2_5v_power">
                    <span class="default"><span class="phys">2</span> 5v Güç</span>
                    <span class="pin"></span></a></li>
            <li class="pin4"><a href="/pin4_5v_power">
                    <span class="default"><span class="phys">4</span> 5v Güç</span>
                    <span class="pin"></span></a></li>
            <li class="pin6"><a href="/pin6_ground">
                    <span class="default"><span class="phys">6</span> Ground</span>
                    <span class="pin"></span></a></li>
            <li class="pin8 uart"><a href="/pin8_gpio8">
                    <span class="default"><span class="phys">8</span> GPIO 14 <small>(TXD)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 15</span>
                    <span class="pin"></span></a></li>
            <li class="pin10 uart"><a href="/pin10_gpio10">
                    <span class="default"><span class="phys">10</span> GPIO 15 <small>(RXD)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 16</span>
                    <span class="pin"></span></a></li>
            <li class="pin12"><a href="/pin12_gpio18">
                    <span class="default"><span class="phys">12</span> GPIO 18 <small>(PCM_C)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 1</span>
                    <span class="alternate legend_ladder">1: Red LED 2</span>
                    <span class="pin"></span></a></li>
            <li class="pin14"><a href="/pin14_ground">
                    <span class="default"><span class="phys">14</span> GND</span>
                    <span class="pin"></span></a></li>
            <li class="pin16"><a href="/pin16_gpio23">
                    <span class="default"><span class="phys">16</span> GPIO 23</span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 4</span>
                    <span class="alternate legend_ladder">4: Green LED 1</span>
                    <span class="pin"></span></a></li>
            <li class="pin18"><a href="/pin18_gpio24">
                    <span class="default"><span class="phys">18</span> GPIO 24</span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 5</span>
                    <span class="alternate legend_ladder">5: Green LED 2</span>
                    <span class="pin"></span></a></li>
            <li class="pin20"><a href="/pin20_ground">
                    <span class="default"><span class="phys">20</span> GND</span>
                    <span class="pin"></span></a></li>
            <li class="pin22"><a href="/pin22_gpio25">
                    <span class="default"><span class="phys">22</span> GPIO 25</span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 6</span>
                    <span class="alternate legend_ladder">6: Blue LED 1</span>
                    <span class="pin"></span></a></li>
            <li class="pin24 spi"><a href="/pin24_gpio8">
                    <span class="default"><span class="phys">24</span> GPIO 8 <small>(CE0)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 10</span>
                    <span class="alternate legend_ladder">10: Button 2</span>
                    <span class="pin"></span></a></li>
            <li class="pin26 spi"><a href="/pin26_gpio7">
                    <span class="default"><span class="phys">26</span> GPIO 7 <small>(CE1)</small></span>
                    <span class="alternate legend_wiringpi">WiringPi Pin 11</span>
                    <span class="alternate legend_ladder">11: Button 1</span>
                    <span class="pin"></span></a></li>

            <!-- B+ -->
            <li class="pin28 bplus"><a href="/pin28_id_sc"><span class="default"><span
                                class="phys">28</span> ID_SC</span> <span class="pin"></span></a></li>
            <li class="pin30 bplus"><a href="/pin30_ground"><span class="default"><span
                                class="phys">30</span> GND</span> <span class="pin"></span></a></li>
            <li class="pin32 bplus"><a href="/pin32_gpio12"><span class="default"><span
                                class="phys">32</span> GPIO 12</span> <span class="pin"></span></a></li>
            <li class="pin34 bplus"><a href="/pin34_ground"><span class="default"><span
                                class="phys">34</span> GND</span> <span class="pin"></span></a></li>
            <li class="pin36 bplus"><a href="/pin36_gpio16"><span class="default"><span
                                class="phys">36</span> GPIO 16</span> <span class="pin"></span></a></li>
            <li class="pin38 bplus"><a href="/pin38_gpio20"><span class="default"><span class="phys">38</span> GPIO 20 (MOSI)</span>
                    <span class="pin"></span></a></li>
            <li class="pin40 bplus"><a href="/pin40_gpio21"><span class="default"><span class="phys">40</span> GPIO 21 (SCLK)</span>
                    <span class="pin"></span></a></li>
            <!-- /B+ -->
        </ul>
    </nav>

@endsection