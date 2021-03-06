<div id="content">
    <div id="pages">
        <article>
            <h2>3v3 Güç</h2>
            <p class="intro">The 3v3, 3.3 volt pini, azami olarak 50 mA (miliamper) akım sağlamakta. Bu akım birkaç
                ledi aynı anda yakabilir, ama daha fazlası için yeterli olmayacaktır.</p>
            <p class="tip">Eğer daha çok akıma ihtiyacınız varsa 5v0 (5V) akım veren pinleri kullanabilir, ve de
                isteğe göre 3v3'e çevirici bir regülatör bağlayabilirsiniz.</p>
        </article>
        <article>
            <h2>GPIO 0 (SDA)</h2>
            <h3>Rev 1 board'larda (Model B 256MB) BCM pin 0, ve Rev 2 board'larda ise pin 2'ye tekabül eder.
                WiringPi için pin 8'dir. Ladder Board'da Küçük Yeşil LED'e tekabül eder.</h3>
            <p>GPIO pinleri ile dijital HIGH ve LOW değerlerini okumak ve hazırlamak oldukça kolay, yalnız bazı
                hususlara dikkat etmeniz gerekmekte:</p>
            <ul>
                <li>Kodu çalıştıracak script'inizi root (süper yönetici) hakları ile çalıştırmalısınız.</li>
                <li>Pin'in modunu OUTPUT (1) olarak tanımlamalısınız</li>
            </ul>
            <p>Eğer WiringPi2-Pytgon kütüphanesini kurduysanız ( pip install wiringpi2 ) o zaman aşağıdaki kodu bir
                .py dosyası olarak kaydedip çalıştırabilirsiniz:</p>
            <pre class="prettyprint linenums lang-python">import wiringpi2 as wiringpi
HIGH = 1
LOW = 0
OUTPUT = 1
INPUT = 0
wiringpi.wiringPiSetup()
wiringpi.pinMode(8,OUTPUT)
wiringpi.digitalWrite(8,HIGH)</pre>
            <p>Ardından şu komutla çalıştırabilirsiniz:</p>
            <pre class="prettyprint lang-bash">sudo python scriptadi.py</pre>

        </article>
        <article>
            <h2>GPIO 0 (SCL)</h2>
            <h3>Rev 1 board'larda BCM pin 1'e, Rev 2 board'larda ise pin 3'e tekabül eder. WiringPi için pin 9'dur.
                Ladder Board'da Küçük Kırmızı Led'e tekabül eder.</h3>
            <pre class="prettyprint linenums lang-ruby">require 'wiringpi2'
HIGH = 1
LOW = 0
OUTPUT = 1
INPUT = 0
io = WiringPi::GPIO.new
io.pin_mode(9,OUTPUT)
io.digital_write(9,HIGH)</pre>

        </article>
        <article>
            <h2>GPIO 4 (GPCLK0)</h2>
            <h3>4 No'lu BCM pinidir. WiringPi için pin 7'dir. Quick2Wire'da I<sup>2</sup>C Interrupt pinidir. Ladder
                Board'da Mavi LED 2'ye tekabül eder.</h3>
        </article>
        <article><h2>GND (0V)</h2></article>
        <article>
            <h2>GPIO 17</h2>
            <h3>17 No'lu BCM pinidir. WiringPi için pin 0'dır. Quick2Wire'da Push Düğmesidir. Ladder Board'da
                Kırmızı LED 1'e tekabül eder.</h3>
        </article>
        <article>
            <h2>GPIO 21 (PCM_D)</h2>
            <h3>Rev 1 board'larda BCM pin 21'e, Rev 2 board'larda ise pin 27'ye tekabül eder. WiringPi için pin
                2'dir. Ladder Board'da Sarı LED 1'e tekabül eder.</h3>
        </article>
        <article>
            <h2>GPIO 22</h2>
            <h3>22 no'lu BCM pinidir. WiringPi için pin 3'tür. Ladder Board'da Sarı LED 2'ye tekabül eder.</h3>
        </article>
        <article><h2>3v3 Güç</h2></article>
        <article>
            <h2>GPIO 10 (MOSI)</h2>
            <h3>10 no'lu BCM pinidir. WiringPi için pin 12'dir. Ladder Board'da Buton 3'e tekabül eder.</h3>
            <p><i class="icon-info-sign"></i> AVRDude ile programlama yapabilmek için bu pini ATmega328'in MOSI
                pinine, Arduino Pin 11'e bağlamalısınız. ATmega328'inizin <a href="/pin1_3v3_power"><i
                            class="icon-bolt"></i>3.3v güç</a> ile beslendiğinden <em>mutlaka emin olun</em>. Eğer 5v
                kullanıyorsanız bir logic-level converter ile voltajı değiştirebilirsiniz.</p>
        </article>
        <article>
            <h2>GPIO 9 (MISO)</h2>
            <h3>9 no'lu BCM pinidir. WiringPi için pin 13'tür. Ladder Board'da Buton 4'e tekabül eder.</h3>
            <p><i class="icon-info-sign"></i> Gordon's modified AVRDude ile programlama yapabilmek için bu pini
                ATmega328'in MISO pinine, Arduino Pin 12'ye bağlamalısınız. ATmega328'inizin <a
                        href="/pin1_3v3_power"><i class="icon-bolt"></i>3.3v güç</a> ile beslendiğinden <em>mutlaka
                    emin olun</em>. Eğer 5v kullanıyorsanız bir logic-level converter ile voltajı
                değiştirebilirsiniz.</p>
        </article>
        <article>
            <h2>GPIO 11 (SCLK)</h2>
            <h3>11 no'lu BCM pinidir. WiringPi için pin 14'tür.</h3>
            <p><i class="icon-info-sign"></i> Gordon's modified AVRDude ile programlama yapabilmek için bu pini
                ATmega328'in SCK pinine, Arduino Pin 13'e bağlamalısınız. ATmega328'inizin <a
                        href="/pin1_3v3_power"><i class="icon-bolt"></i>3.3v güç</a> ile beslendiğinden <em>mutlaka
                    emin olun</em>. Eğer 5v kullanıyorsanız bir logic-level converter ile voltajı
                değiştirebilirsiniz.</p>
        </article>
        <article><h2>Ground</h2></article>

        <!-- B+ -->
        <article><h2>EEPROM ID DATA</h2>
            <h3>Sadece Model B+'larda!</h3>
            <p>EEPROM ID pinleri yeni eklenti board'ları için ayrılmış i2c bus'larıdır. Bu pinler EEPROM ile
                iletişime geçerek ID and pin durum konfigürasyonunu aktarırlar. Bu pinlerin başka bir işlevi yoktur.
                Bu pinler ayrıca özellikle bu hizada yerleştirilmişir, böylece eğer 26 pinlik eski bir genişletme
                kartınız varsa zaten bu pinlere ihtiyacınız olmayacak, ve de kartı kullanırken sadece bu pinler
                board'ın pinlerinin kenarlıkların dandolayı kapanacağından, B+'da gelen diğer pinleri de bu karta ek
                olarak kullanabileceksiniz.</p></article>
        <article><h2>GPIO 5</h2>
            <h3>Sadece Model B+'larda!</h3></article>
        <article><h2>GPIO 6</h2>
            <h3>Sadece Model B+'larda!</h3></article>
        <article><h2>GPIO 13</h2>
            <h3>Sadece Model B+'larda!</h3>
            <table>
                <thead>
                <tr>
                    <th>ALT0 / PWM</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>PWM 1</td>
                </tr>
                </tbody>
            </table>
        </article>
        <article><h2>GPIO 19</h2>
            <h3>Sadece Model B+'larda!</h3>
            <table>
                <thead>
                <tr>
                    <th>ALT0 / PCM</th>
                    <th>ALT4 / SPI1</th>
                    <th>ALT5 / PWM</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>PCM Frame Sync</td>
                    <td>MISO</td>
                    <td>PWM1</td>
                </tr>
                </tbody>
            </table>
        </article>
        <article><h2>GPIO 26</h2>
            <h3>Sadece Model B+'larda!</h3></article>
        <article><h2>Ground</h2>
            <h3>Sadece Model B+'larda!</h3></article>
        <!-- /B+ -->
        <article>
            <h2>5v Güç</h2>
            <p class="intro">5v0 akım pinleri doğrudan Raspberry Pi'nin güç girişine bağlıdır, ve de adaptörünüzden
                sağlanan akımın değerinin (amper) tamamını aktarmaktadır.</p>
            <p>Buradan beslenen elektrik akımını küçümsemeyin. Eğer sağlam bir adaptörünüz varsa bu akım ile pek çok
                şey yapabilirsiniz. Bu akım ile Arduino besleyebilir, hatta küçük bir elektrolüminesan kablo
                inverter'ı bile çalıştırabilirsiniz.</p>
        </article>
        <article>
            <h2>5v Güç</h2>
            <p>Bu pin, bir önceki <a href="/pin2_5v_power"><i class="icon-bolt"></i>5v güç pini</a> ile tamamen
                aynı. Projenizin yoğunluğuna göre bir tane 5v akım pini yetmezse bu pini de kullanabilirsiniz.</p>
        </article>
        <article><h2>Ground</h2>
            <p>Revizyon 2 Raspberry Pi'de tüm "bağlayamayın" (do-not-connect) pinleri ek ground (0v) pinleri olarak
                değişti. Buralara pin bağlarken dikkatli olun, çünkü doğrudan bir çıkışı bu pinlere bağlamak
                cihazınıza zarar verebilir.</p>
        </article>
        <article>
            <h2>GPIO 14 (TXD)</h2>
            <h3>14 no'lu BCM pinidir. WiringPi için pin 15'tir.</h3>
            <p>Bu pin, <a href="http://en.wikipedia.org/wiki/Universal_asynchronous_receiver/transmitter">UART</a>
                transmit (gönderici) pin'i, TXD olarak çalışır.</p>
            <p>UART, eğer Piduino gibi (Arduino, Raspberry Pi kombinasyonu) durumlarda oldukça işe yarayan bir
                pindir. <a href="/pin10_gpio10">RXD pini</a> bir 3.3v <-> 5v dönütürücü kullanarak Arduino'nun TXD
                pinine bağlayabilir, ve de bu TXD pinini Arduino'nun RXD pinine bağlayabilirsiniz. Bir voltaj
                dönüştürücü kullanmak zorunda değilsiniz, Arduino'yu <i class="icon-bolt"></i>3.3v</p> ile de
            besleyebilirsiniz.
        </article>
        <article>
            <h2>GPIO 15 (RXD)</h2>
            <h3>15 no'lu BCM pinidir. WiringPi için pin 16'tir</h3>
            <p>Bu pin, <a href="http://en.wikipedia.org/wiki/Universal_asynchronous_receiver/transmitter">UART</a>
                receiver (alıcı) pin'i, RXD olarak çalışır.</p>
        </article>
        <article>
            <h2>GPIO 18 (PCM_CLK)</h2>
            <h3>18 no'lu BCM pinidir. WiringPi için pin 1'dir. Quick2Wire LED'idir. Ladder Board'da Kırmızı LED 2'ye
                tekabül eder.</h3>

            <table>
                <thead>
                <tr>
                    <th>ALT5 / PWM</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>PWM 0</td>
                </tr>
                </tbody>
            </table>
        </article>
        <article>
            <h2>Ground</h2>
        </article>
        <article>
            <h2>GPIO 23</h2>
            <h3>23 no'lu BCM pinidir. WiringPi için pin 4'tür. Ladder Board'da Yeşil LED 1'e tekabül eder.</h3>
        </article>
        <article>
            <h2>GPIO 24</h2>
            <h3>24 no'lu BCM pinidir. WiringPi için pin 5'tir. Ladder Board'da Kırmızı LED 2'ye tekabül eder.</h3>
        </article>
        <article><h2>Ground</h2></article>
        <article>
            <h2>GPIO 25</h2>
            <h3>25 no'lu BCM pinidir. WiringPi için pin 6'dır. Quick2Wire için SPI Interrupt'tır. Ladder Board'da
                Mavi LED 1'e tekabül eder.</h3>
        </article>
        <article>
            <h2>GPIO 8 (CE0)</h2>
            <h3>8 no'lu BCM pinidir. WiringPi için pin 10'dur. Ladder Board'da Button 2'ye tekabül eder.</h3>
            Gordon's modified AVRDude ile programlama yapmak için bu pini <p><i class="icon-info-sign"></i> <em>doğrudan</em>
                ATmega 328'in Reset (RST) pin'ine bağlamalısınız. ATmega328'in <a href="/pin1_3v3_power">3.3v
                    beslemesi</a> ile beslendiğinden <em>emin olun</em>. Eğer 5v kullanıyorsanız, bir logic-level
                converter kullanmalısınız.</p>
        </article>
        <article>
            <h2>GPIO 7 (CE1)</h2>
            <h3>7 No'lu BCM pinidir. WiringPi için pin 11'dir. Ladder Board'da Button 1'e tekabül eder.</h3>
        </article>
        <article><h2>EEPROM ID CLOCK</h2>
            <h3>Sadece Model B+'larda!</h3>
            <p>EEPROM ID pinleri yeni eklenti board'ları için ayrılmış i2c bus'larıdır. Bu pinler EEPROM ile
                iletişime geçerek ID and pin durum konfigürasyonunu aktarırlar. Bu pinlerin başka bir işlevi yoktur.
                Bu pinler ayrıca özellikle bu hizada yerleştirilmişir, böylece eğer 26 pinlik eski bir genişletme
                kartınız varsa zaten bu pinlere ihtiyacınız olmayacak, ve de kartı kullanırken sadece bu pinler
                board'ın pinlerinin kenarlıkların dandolayı kapanacağından, B+'da gelen diğer pinleri de bu karta ek
                olarak kullanabileceksiniz.</p>
        </article>
        <article><h2>Ground</h2>
            <h3>Sadece Model B+'larda!</h3>
        </article>
        <article><h2>GPIO 12</h2>
            <h3>Sadece Model B+'larda!</h3>
            <table>
                <thead>
                <tr>
                    <th>ALT0 / PWM</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>PWM 0</td>
                </tr>
                </tbody>
            </table>
        </article>
        <article><h2>Ground</h2>
            <h3>Sadece Model B+'larda!</h3></article>
        <article><h2>GPIO 16</h2>
            <h3>Sadece Model B+'larda!</h3></article>
        <article><h2>GPIO 20</h2>
            <h3>Sadece Model B+'larda!</h3>
            <table>
                <thead>
                <tr>
                    <th>ALT0 / PCM</th>
                    <th>ALT4 / SPI1</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>PCM Data In</td>
                    <td>MOSI</td>
                </tr>
                </tbody>
            </table>
        </article>
        <article><h2>GPIO 21</h2>
            <h3>Sadece Model B+'larda!</h3>
            <table>
                <thead>
                <tr>
                    <th>ALT0 / PCM</th>
                    <th>ALT4 / SPI1</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>PCM Data Out</td>
                    <td>SCLK</td>
                </tr>
                </tbody>
            </table>
        </article>
        <article class="homepage">
            <h2>Pinler (Pinout)!</h2>
            <h3>Pinout, Raspberry Pi Rev 2.0 ve Model B+ Pinlerini daha iyi tanıyabilmeniz için hazırlanmış
                interaktif bir mikro sitedir</h3>
            <p>Pinout print edilmek için tasarlanmadı, ama Raspberry Pi GPIO pinlerinin neye yaradığını
                öğrenebilmeniz amacıyla hazırlandı.</p>
            <h2 style="margin-top:20px;">Model B+</h2>
            <p>Bu mikro site <a
                        href="http://www.raspi.gen.tr/2014/07/14/yeni-raspberry-pi-modeli-raspberry-pi-model-b/"
                        target="blank">Raspberry Pi Model B+</a> pinlerini de anlatmakta. 26 standart pinin altındaki 14
                ekstra pin Model B+ ile gelen yeni pinlerdir</p>
            <p>Not: Sol menüde 26 pin ile Model B+ ın yeni pinleri arasındaki boşluk sadece karıştırmamak
                amacıyladır, Model B+'da pinler arasında öyle bir boşluk yoktur.</p>

        </article>
        <article class="legend_5">
            <h2>5v Güç</h2>
            <p class="intro">The 5v güç pinleri pins projelerinizde kullanabileceğiniz elektriği sağlamak amacıyla
                eklenmiştir. Raspberry Pi'nin kendisi de aynı kaynaktan beslenmektedir.</p>
            <p>5v Akımı kolaylıkla 3.3 volta da regüle edilebilir.</p>
            <p>Eğer 5v'dan daha fazla akıma ihtiyacınız varsa o cihazınızı başka bir güç kaynağıdnan beslemek
                zorundasınız.</p>
        </article>
        <article class="legend_3">
            <h2>3.3v Güç</h2>
            <p class="intro">Azami olarak 50mA akım verebilen 3.3v pinleri ile kolaylıkla birkaç LED lamba
                yakabilir, ufak devre bileşenlerinize güç verebilirsiniz.</p>
        </article>
        <article class="legend_ground">
            <h2>0v Ground</h2>
            <p class="intro">Raspberry Pi ile bir devre bileşenine güç verdiğiniz zaman Ground pini ile devreyi
                tamamlamalısınız.</p>
            <p>Bu pinleri daha kolay hatırlamanız için 5V akımlarının altındaki pini ve de 25 no'lu pini ezberlemeyi
                deneyebilirsiniz. Bu size kolaylık sağlayacaktır.</p>
        </article>
        <article class="legend_uart">
            <h2>UART - Universal Asenkron Verici/Alcı</h2>
            <p class="intro">WiringPi'deki 2 UART pini Pin 15 ve 16'dır</p>
            <p>UART Ardıino, veya bootload edilmiş bir ATmega ile kolayca iletişim kurkanızı sağlayacak bir
                arayüzdür. Yalnız bu iletişimi kurarken dikkat etmeniz gereken bazı hususlar var. Raspberry Pi 3.3v
                iken Arduino 5v'tur. Bunları akımları eşitlemeden bağlarsanız cihazlarınızdan dumanlar tütmeye
                başlayabilir</p>
            <p>Örneğin <a target="_blank" href="http://www.hobbytronics.co.uk/ATmega328-arduino">Arduino bootload
                    edilmiş ATmega 328</a> devresini breadboard'a kurup bir akım regülatörü ile Raspberry Pi'nin 5v
                yolunu 3.3 v'a dönüştürebilirsiniz. Bu sayede 3.3v logic'ine sahip bir Arduino klonunuz olacvak.</p>
            <p>Aşağıdaki Python örneği Raspberry Pi'nin UART'ını 9600baud'da açar ve 'merhaba dunya' yazar</p>
            <pre class="prettyprint">import wiringpi2 as wiringpi
wiringpi.wiringPiSetup()
serial = wiringpi.serialOpen('/dev/ttyAMA0',9600)
wiringpi.serialPuts(serial,'merhaba dunya')
</pre>
        </article>
        <article class="legend_gpio">
            <h2>GPIO - Genel amaçlı giriş çıkışlar</h2>
            <p class="intro">WiringPi için 8 adet GPIO pini vardır. Bunlar: 0, 1, 2, 3, 4, 5, 6 ve 7'dir.</p>
        </article>
        <article class="legend_spi">
            <h2>SPI - Serial Peripheral Interface</h2>
            <p class="intro">four-wire serial bus olarak da bilinen SPI, bir pin setinden birden fazla adresteki
                birden fazla uygun cihazı <a href="http://tr.wikipedia.org/wiki/Papatya_zinciri" target="_blank">papatya
                    zinciri</a> yapıp yönetmenizi sağlar.</p>
            <p>Buna örnek olarak MCP23S17 digital IO expander çipini verebiliriz. 0 yerine S'in bulunduğu versiyon I<sup>2</sup>C
                versiyonudur. WiringPi2 ile çok kolay bir şekilde kullanlabilir:</p>
            <pre class="prettyprint linenums lang-python">import wiringpi2 as wiringpi
HIGH = 1
OUTPUT = 1
PIN_BASE = 65
SPI_ADDR = 0x20
wiringpi.wiringPiSetup()
wiringpi.mcp23S17Setup(PIN_BASE,SPI_ADDR)
# başlangıç pini ile birlikte 16 pin
mcp23S17pins = range(PIN_BASE,PIN_BASE+15)
for pin in mcp23S17pins:
	wiringpi.pinMode(pin,OUTPUT)
	wiringpi.digitalWrite(pin,HIGH)</pre>

            <p>SPI portunuz ayrıca Gordon'un modifiye AVRDude'una Arduino skeçleri yükleyerek ATmega 328'ye "<a
                        href="http://en.wikipedia.org/wiki/Bit_banging" target="_blank">bit banging</a>" de
                yapabilirsiniz.</p>
            <p>Raspberry Pi'nizin SPI port'unu ATmega'nıza bağlayın ve <em>ATmega'yı Raspberry Pi'nin 3.3v gücüyle
                    besleyip açın</em>. SPI sürücüleri çalıştırmadığınızdan emin olduktan sonra "avrdude -p m328p -c
                gpio" komutu ile bağlantıyı kontrol edin.</p>
            <p>ATmeganız varsa her bir pin için ayrı ayrı tıklayarak nasıl bağlayabileceğinizi öğrenebilirsiniz.</p>
        </article>
        <article class="legend_i2c">
            <h2>I2C - Inter Integrated Circuit</h2>
            <p class="intro">Raspberry Pi'nin I<sup>2</sup>C pinleri eğer pek çok harici bileşen ile çalışıyorsanız
                oldukça işinize yarayacaktır.</p>

            <p>Bağlı olan I<sup>2</sup>C bileşenini tek satırlık bir kodla kontrol edebilirsiniz:</p>
            <pre class="prettyprint linenums lang-bash">sudo apt-get install i2c-tools
sudo i2cdetect -y 1</pre>
            <p>I2c'ye Python'un smbus kütüphanesi ile erişebilirsiniz:</p>
            <pre class="prettyprint linenums lang-python">import smbus
DEVICE_BUS = 1
DEVICE_ADDR = 0x15
bus = smbus.SMBus(DEVICE_BUS)
bus.write_byte_data(DEVICE_ADDR, 0x00, 0x01)</pre>
        </article>
        <article class="legend_ladder">
            <h2>Raspberry Pi Ladder Board</h2>
            <p class="intro">Bu ucuz ve kit, Raspberry Pi'nin GPIO portlarını kurcalamak için oldukça güzel bir
                alternatif araç.</p>
            <p>Bu kit, 12 tane LED'i ve de 4 tane butonu doğrudan GPIO pinlerine bağlıyor, ve de böylece
                programlamaya başlamayı oldukça hızlandırıyor. Soldaki pinleri kullanarak, basitçe 0, 1, 2, 3, 4, 5,
                6, 7, 8 ve 9 pinlerini, the LEDleri OUTPUT (1) için, ve de butonları, yani 10,11,12,14 pinlerini de
                INPUT (0) için ayarlamış ve de okuma ve yazmaya hazır oluyorsunuz.</p>
            <p>Aslında pratikte durum bundan biraz daha karışık. Butonların hepsinde aslında kendilerine ait pull
                up/down PUD_UP/UP (2) ile değişmeli, çünkü aslında bu board'da bir butona basmak pini ground'a
                çekiyor.</p>
            <p>Eğer bu board'ı aldıysanız aşağıdaki kod WiringPi de kullanıyorsanız güzel bir başlangıç
                olacaktır:</p>
            <pre class="prettyprint lang-python">import wiringpi2 as wiringpi
INPUT = 0
OUTPUT = 1
LOW = 0
HIGH = 1
BUTTONS = [13,12,10,11]
LEDS = [0,1,2,3,4,5,6,7,8,9]
PUD_UP = 2

wiringpi.wiringPiSetup()

for button in BUTTONS:
    wiringpi.pinMode(button,INPUT)
    wiringpi.pullUpDnControl(button,PUD_UP)

for led in LEDS:
    wiringpi.pinMode(led,OUTPUT)

while 1:
    for index,button in enumerate(BUTTONS):
        button_state = wiringpi.digitalRead(button)
        first_led = LEDS[index*2]
        second_led = LEDS[(index*2)+1]
        #print str(button) + ' ' + str(button_state)
        wiringpi.digitalWrite(first_led,1-button_state)
        wiringpi.digitalWrite(second_led,1-button_state)
    wiringpi.delay(20)</pre>
            <p>Örnekte pinleri ve de butonları bu board'daki dizilimdeki gibi tanıttık, yoksa pinler düzgün
                çalışmayacaktı. Ayrıca wiringpi.wiringPiSetup() kodunu da çalıştırmayı unutmayın, yoksa hiçbir şey
                olmayacak!</p>
        </article>
        <article class="legend_wiringpi">
            <h2>Raspberry Pi WiringPi</h2>
            <p>WiringPi, Arduino kullanmış olanların hiç yabancılık çekmeyeceği, Arduino benzeri bir
                pinleme/klablolama sistemini Raspberry Pi'ye getirmeyi amaçlamış üçüncü parti bir kütüphanedir. Bu
                kütüphanenin amacı benzer ve ortak bir platform oluşturmak, ve de Raspberry Pi GPIO pinlerini farklı
                diller ile yönetebilmektir. WiringPi özünde C dili ile yazılmıştır, fakat hem Ruby hem de Python
                türevleri mevcuttur. Bunları sıra ile Ruby için "gem install wiringpi" veya Python için "pip install
                wiringpi2" diyerek kurabilirsiniz.</p>
            <p>Python kullanıcıları kütüphanenin adının sonundaki 2'ye dikkat etmiş olabilirler. Bu aslında
                WiringPi2-Python kütüphanesidir. Bu kütüphane sonunda mevcut WiringPi kütüğhanesindeki özellikleri
                ve esnekliği Raspberry Pi'ye Python dilinde getirmeyi başarmış bir kütüphanedir.</p>
            <p>Daha fazla bilgi için <a target="blank" href="http://wiringpi.com/">WiringPi resmi web sitesi</a>ni
                ziyaret edebilirsiniz.</p>


            <h2 style="margin-top:20px;">WiringPi'ye başlangıç</h2>
            <p>WiringPi kendi <a href="http://wiringpi.com/pins/" target="_blank">pin numaralama şematiğini
                    kullanıyor</a>. Bu linkten WiringPi'nin GPIO pinlerinizi nasıl numaralandırdığını görebilir,
                pinlerin ne yaptığını inceleyebilir, ve de C, Python veya Ruby dilleri ile GPIO programlamaya
                başlayabilir, devre elemanlarınızı yönetebilirsiniz.</p>
            <p>Arduino benzeri GPIO kütüphanesi WiringPi, C dili için doğrudan <a target="_blank"
                                                                                  href="https://git.drogon.net/?p=wiringPi;a=summary">Gordon'un
                    git reposunda</a> mevcuttur. Ayrıca Python, Ruby hatta Perl ve PHP için de daha kısıtlı da olsa
                desteği mevcuttur.</p>
            <p>Python'a kurmak saniyelerinizi alacak:</p>
            <pre class="prettyprint lang-bash">sudo pip install wiringpi2</pre>
            <p>Sonundaki 2'yi fark ettiniz mi? İşte bu yeni, ve de daha modern WiringPi kütphanesi (WiringPi2)!</p>
        </article>
        <article class="legend_ledborg">
            <h2>PiBorg LedBorg RGB LED Board</h2>
            <p><a target="blank" rel="nofollow" href="http://www.piborg.org/ledborg/">PiBorg LedBorg</a>, Raspberry
                Pi için oldukça hafif bir RGB LED board'udur. Bu board kendisine ait bir sürücü barındırır, bu
                yüzden ayrıca bir sürücü kurmanıza gerek yok.</p>
            <p>Eğer daha fazla aralıkta renk istiyorsanız bunu WiringPi ile softPwm ile de yapabilirsiniz. Pin
                atamaları şu şekilde:</p>
            <p><strong>WiringPi pin 0:</strong> Kırmızı LED<br/>
                <strong>WiringPi pin 2:</strong> Yeşil LED<br/>
                <strong>WiringPi pin 3:</strong> Mavi LED</p>
            <p>Python ile bunu yapmak neredeyse çocuk oyuncağı:</p>
            <pre class="prettyprint">import wiringpi2 as wiringpi
wiringpi.wiringPiSetup()
wiringpi.softPwmCreate(0,0,100)
wiringpi.softPwmCreate(2,0,100)
wiringpi.softPwmCreate(3,0,100)
wiringpi.softPwmWrite(3,100)
wiringpi.softPwmWrite(0,100)
					</pre>
        </article>
        <article class="legend_clockatoo">
            <h2>Geekroo Clockatoo Clock Board ve buzzer</h2>
            <p class="intro">Bu board, WiringPi pin 7, GPIO pin 4 ile yönetilebilir.</p>
            <p><a target="blank" rel="nofollow" href="https://www.modmypi.com/geekroo-raspberry-pi-real-time-clock">GeekRoo
                    Clockatoo</a> ufak ve de işlevli bir pil destekli gerçek saati, 4 karakterli, 7 segmentli bir ekranı
                ve de bir zili (buzzer) bir araya getiren bir board.</p>
            <p><a target="blank" rel="nofollow"
                  href="http://geekroo.com/wiki/Manual:RPi_Expansion_Board_-_Clockatoo">GeekRoo'nun kendi kurulum
                    makalesi</a> sizin saati ayarlamanız için yeterli bilgiye sahip, fakat buzzer'ı nasıl
                kullanacağınızdan bahsetmiyor.</p>
            <p>WiringPi'nin softTone'u buzzer'ı farklı hızlarda (uyarıcı veya rahatsız edici) çalıştırmanızı
                sağlıyor. Aşağıdaki kodla örnek bir alaram sesi yakalayabilirsiniz:</p>

            <pre class="prettyprint">import wiringpi2 as wiringpi
wiringpi.wiringPiSetup()
wiringpi.softToneCreate(7)
wiringpi.softToneWrite(7,1)
					</pre>

            <p>softToneWrite için tanımlanmış ikinci parametre frekansa tekabül eder. Bu değer (1) yükseltildikçe
                zil daha çok sinir bozucu bir hal alır, bu da alaramlı Raspberry Pi saatinizle kesin kez uyanmanızı
                sağlar!</p>
        </article>
        <article class="legend_atmega">
            <h2>SPI üzerinden ATmega 328p / Arduino</h2>
            <p class="intro">Raspberry pi'nizin doğrudan ATmega 328p/Arduino'yu besleyip onunla programlama
                yapmanıza olanak sağladığını biliyor muydunuz? Bunu sadece birkaç kablo, bir breadboard, bir 16MHZ
                kristal with nothing but a few wires, a breadboard, a 16Mhz crystal osilatör ve de birkaç 22pF
                kondansatör ile yapabilirsiniz!</p>
            <p>Öncelikle <a target="_blank" href="http://pi.gadgetoid.com/article/building-the-pico-piduino">Pico
                    PiDuino makalesini</a> takip edin / etmenizi öneririz, bunu sıfırdan uygulamak sadece &pound;5 gibi
                bir masraf çıkaracak.</p>
            <p>Bunun ardından <a target="_blank"
                                 href="https://projects.drogon.net/raspberry-pi/gertboard/arduino-ide-installation-isp/">Gordon's
                    modifiye AVRDude</a>'unu kurmalısınız.</p>
            <p><i class="icon-pushpin"></i>8/CEO'yu ATmega'nuzun Reset/RST pin'ine bağlayın, <i
                        class="icon-pushpin"></i>9/MISO'yu da ATmega'nın MISO pin'ine (D12) bağlayın, <i
                        class="icon-pushpin"></i>10'u da onun MOSI pin'ine (D11) bağlayın. Son olarak <i
                        class="icon-pushpin"></i>11/SCLK'yı da onun SCLK pin'ine (D13) bağlayın.</p>
            <p>ATmega'nızı Raspberry Pi'den aldığınız <i class="icon-bolt"></i>3.3v ile besleyin, GND Pinini de
                Pi'ye bağlayarak düzeneği tamamlayın ve de cihazı açın.</p>
            <p>Askıda kalmış bir SPI cihazı kalmadığına emin olun, ve de cihazın bağlandığını kontrol edin. Bunu
                aşağıdaki komutlar ile yapabilirsiniz:</p>
            <pre class="prettyprint">avrdude -p m328p -c gpio</pre>
            <p>Arduino skeçlerini (sketch) derlemeye aşağıdaki komut ile başlayabilirsiniz:</p>
            <pre class="prettyprint">sudo apt-get install arduino arduino-mk</pre>
            <p><a href="http://pi.gadgetoid.com/arduino/Makefile">Bu basit makefile dosyası</a> (<a
                        href="http://paste.debian.net/111092/" target="_blank">alternatif link</a>) başlamanız için
                yeterli olacaktır.Yeni bir sketch oluşturup adına mysketch.ino diyin ve de çalıştırın:</p>
            <pre class="prettyprint">export BOARD=atmega328<br/>make<br/>avrdude -p m328p -c gpio -e -U flash:w:build-cli/Arduino.hex</pre>
        </article>
        <article class="legend_pwm">
            <h2>PWM - Sinyal Genişlik Modülasyonu</h2>
        </article>
    </div>
</div>