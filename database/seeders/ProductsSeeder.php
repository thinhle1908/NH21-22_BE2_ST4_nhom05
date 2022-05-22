<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            //01
            ['name'=> "Revlon Shine Booster Hair Dryer | 1875W Smooth Blowout and Maximum Volume
            ",'manu_id'=>1,'type_id'=>1,'price'=>26.10 ,'image'=>"51tpgvs6cCL._SL1000_.jpg",'description'=>"IONIC TECHNOLOGY: Gives you the power to create a salon-styled finish. Less frizz, for shiny, healthy-looking hair.
            CERAMIC COATING: Helps reduce damage over-styling with even heat distribution making styling fast and easy.
            CONTROL: Smoothing concentrator attachment as well as volumizing diffuser included for the ultimate styling control.
            ALL HAIR TYPES: 1875-Watt. 2 heat/ 2 speed settings for complete drying and styling flexibility. Cold shot button releases cool air to lock in the style.
            LIGHTWEIGHT: Features a featherweight design so you can get stunning blowouts easily and comfortably.",'feature'=> 0],
             //02
             ['name'=> "HOT TOOLS Pro Artist Black Gold 2000 Watts Ionic Hair Dryer",
             'manu_id'=>2,
             'type_id'=>1,
             'price'=>117.98,
             'image'=>"61dDQAuh4AL._AC_SL1500_.jpg",
             'description'=>"2000-WATT POWER: AC motor and 2000 watts for long-life and ultra-powerful airflow.
             CERAMIC + IONIC TECHNOLOGY: Ion generator, ceramic and ion technology for fast drying, even heating and less damage.
             STYLING FLEXIBILITY: Multiple settings (4 heat/3 speed) for styling variety and great performance on all hair types. Turbo boost button provides an extra speed option.
             ERGONOMIC DESIGN: Comfortable hold, agile to operate, detachable end cap for easy cleaning.
             TRAVEL READY: Automatic dual voltage lets you create when you are on-the-go.
             ",'feature'=> 1],
             //03
             ['name'=> "Revlon 1875W Lightweight + Compact Travel Hair Dryer, Yellow",
             'manu_id'=>1,
             'type_id'=>1,
             'price'=>9.34,
             'image'=>"61TIqqG26oL._SL1500_.jpg",
             'description'=>"Wattage of this appliance may vary depending on the location of use
             Compact and lightweight design, perfect for travel
             2 heat/speed settings for drying and styling flexibility and control
             Cool shot button help to set the look for a gorgeous, long-lasting results
             IONIC TECHNOLOGY helps to reduce frizz and static, leaving hair looking conditioned, smooth and shiny",
             'feature'=> 1],
              //04
              ['name'=> "Dynacraft Magna Front Shock Mountain Bike Boys, Girls",
              'manu_id'=>3,
              'type_id'=>2,
              'price'=>336.00,
              'image'=>"81MwNC6Jq7L._AC_SL1500_.jpg",
              'description'=>"Front shock fork
              18 speed index derailleur
              Front and rear linear pull brakes
              Quick release seat post",
              'feature'=> 1],
               //05
             ['name'=> "RoyalBaby Freestyle Kids Bike 12 14 16 18 20 Inch Childrens Bicycle for Age 3-12 Years Boys Girls
             ",
             'manu_id'=>3,
             'type_id'=>2,
             'price'=>134.99,
             'image'=>"71m488v4VFL._AC_SL1500_.jpg",
             'description'=>"",
             'feature'=> 0],
              //06
              ['name'=> "Kulana Hiku Cruiser Bike, Multiple Colors
              ",
              'manu_id'=>3,
              'type_id'=>2,
              'price'=>399.89,
              'image'=>"71C4nu5pjTL._AC_SX679_.jpg",
              'description'=>"Classic cruiser steel frame and fork keeps the ride smooth
              Single-speed drivetrain offers simplified riding and easy maintenance
              Rear coaster brake for simple intuitive stopping
              Front and rear fenders add style and keep you clean
              Classic swept-back handlebars provide a comfortbale upright riding position and a comfortable cruiser spring seat to soften your ride",
              'feature'=> 0],
               //07
             ['name'=> "Samsung Electronics Galaxy Watch 4 40mm Smartwatch with ECG Monitor Tracker for Health Fitness Running Sleep Cycles GPS Fall Detection Bluetooth US Version, Silver",
             'manu_id'=>4,
             'type_id'=>3,
             'price'=>199.99,
             'image'=>"donghosamsunganh1.jpg",
             'description'=>"Samsung Electronics Galaxy Watch 4 40mm Smartwatch with ECG Monitor Tracker for Health Fitness Running Sleep Cycles GPS Fall Detection Bluetooth US Version,...",
             'feature'=> 1],
              //08
              ['name'=> "Garmin 010-02064-00 Instinct, Rugged Outdoor Watch with GPS, Features Glonass and Galileo, Heart Rate Monitoring and 3-Axis Compass, Graphite
              ",
              'manu_id'=>5,
              'type_id'=>3,
              'price'=>229.99,
              'image'=>"6181t0057sL._AC_SL1500_.jpg",
              'description'=>"ugged GPS watch built to withstand the toughest environments
              Constructed to U.S. Military standard 810G for thermal, shock and water resistance (rated to 100 meters)
              Built in 3 axis compass and barometric altimeter, plus multiple global navigation satellite systems (GPS, Glonass and Galileo) support helps track in more challenging environments than GPS alone
              Monitor your estimated heart rate, activity and stress; Train with preloaded activity profiles. Strap material: Silicone
              Stay connected with smart notifications (with a compatible smartphone) and automatic data uploads to the Garmin connect online fitness community
              Use the trackback feature to navigate the same route back to your starting point; Use the Garmin explore website and app to plan your trips in advance
              Battery life: Up to 14 days in smartwatch mode, up to 16 hours in GPS mode, up to 40 hours in Ultratrac battery saver mode",
              'feature'=> 0],
               //09
             ['name'=> "Fossil Men's Collider Hybrid Smartwatch HR with Always-On Readout Display, Heart Rate, Activity Tracking, Smartphone Notifications, Message Previews
             ",
             'manu_id'=>6,
             'type_id'=>3,
             'price'=>70.99,
             'image'=>"81a6mhowkOL._AC_UX679_.jpg",
             'description'=>"Hybrid Smartwatch HR (Heart Rate) works with iPhone and Android Phones
             Enjoy 2+ weeks of battery life on a single charge
             Heart Rate, Activity & Sleep Tracking with in-depth wellness stats
             This is one smart watch - Receive and view smartphone notifications and alerts, see calendar and weather updates, control your music and more
             Case diameter: 42.0 millimeters",
             'feature'=> 0],
              //10
              ['name'=> "SAMSUNG 15.6” Galaxy Book2 Pro Laptop Computer, i7 / 16GB / 512GB, 12th Gen Intel Core Processor, Evo Certified, Lightweight, 2022 Model, Graphite",
              'manu_id'=>4,
              'type_id'=>4,
              'price'=>1349.99,
              'image'=>"61M-QNJf4pL._AC_SL1200_.jpg",
              'description'=>"OWERFUL, FAST, AMAZING: Our new laptop is packed with the premium performance you’ve come to expect from Samsung — plus some; It’s powered by the latest 12th Gen Evo-certified Intel processor, our most powerful available CPU yet
              THIN, LIGHT, POWERFUL: With a PC this powerful, youll want to take it with you wherever you go; And you can! At less than 2 pounds, Galaxy Book2 Pro is our thinnest and lightest laptop yet
              BRILLIANT, BRIGHT, BEAUTIFUL: Whether you're scrolling through your social feed or video chatting with your bestie, everything looks amazing on a stunning AMOLED screen that’s up to 33% brighter;* Available in two sizes (13.3 and 15.6)
              VIDEO CHAT IN HIGH DEFINITION: Galaxy Book2 Pro features an upgraded full HD camera with a 1080p wide-angle view that’s 2x clearer* than before; You’ll sound amazing too with upgraded Dolby Atmos sound and intelligent noise canceling
              LONG LASTING CHARGE, POWERS UP FAST: Galaxy Book2 Pro features our longest-lasting battery to keep you going for hours and hours on a single charge; When you finally do need a jolt of power, get energized faster with a universal fast charger that gets you 40% of battery power back in just 30 minutes
              INNOVATION THAT MOVES YOU FORWARD: Get the combined capabilities of a laptop and a tablet with a versatile 2 in 1 design that features a 360° hinge; Bring ideas to life on the screen with an included S Pen that feels like a real pen
              UNITE YOUR GALAXY, MULTIPLY THE POSSIBILITIES: All of your Galaxy devices sync to help you do more; Pair them up and take control of an interconnected network of seemingly unlimited possibilities; Access a file, photo or text on any device
               See more product details
              Note: Products with electrical plugs are designed for use in the US. Outlets and voltage differ internationally and this product may require an adapter or converter for use in your destination. Please check compatibility before purchasing.",
              'feature'=> 0],
               //11
             ['name'=> "Acer Chromebook Enterprise Spin 513 R841LT-S6DJ  13.3 FHD IPS Touch Corning Gorilla Glass Display  Qualcomm Snapdragon 7c Compute Platform  8GB LPDDR4X  128GB eMMC  4G LTE  WiFi 5  Chrome OS",
             'manu_id'=>7,
             'type_id'=>4,
             'price'=>680.29,
             'image'=>"81rAXAyovBL._AC_SL1500_.jpg",
             'description'=>"Qualcomm Snapdragon 7c Compute Platform - Qualcomm Kryo 468 Octa-core CPU (Up to 2.4 GHz)* | Qualcomm Adreno 618 GPU*
             13.3 Full HD (1920 x 1080) LED-backlit TFT LCD IPS Multi-Touch Display with Corning Gorilla Glass | 360-Degree Convertible Design
             8GB LPDDR4X On-Board Memory and 128GB eMMC
             Qualcomm Snapdragon X15 LTE Modem - LTE Category 12 (DL), LTE Category 13 (UL) - Peak Download Speed: 600 Mbps* | 802.11ac WiFi 5 (Dual-Band 2.4GHz and 5GHz) | Bluetooth 5.0
             2 - USB Type C ports supporting USB 3.2 Gen 1 (up to 5 Gbps), DisplayPort over USB-C, USB Charging, DC-in | 1 - USB 3.2 Gen 1 Type-A port | 1 - Nano SIM Slot (eSIM Ready)
             Two Built-in Stereo Speakers and Two Built-in Microphones | Google Assistant Lab Certification
             HD Webcam (1280 x 720) supporting Super High Dynamic Range (SHDR) | Corning Gorilla Glass Touchpad",
             'feature'=> 0],
              //12
              ['name'=> "Newest HP 14 HD Laptop, Windows 11, Intel Celeron Dual-Core Processor Up to 2.60GHz, 4GB RAM, 64GB SSD, Webcam, Dale Pink(Renewed)",
              'manu_id'=>8,
              'type_id'=>4,
              'price'=>215.00,
              'image'=>"61MGsq1ZVaL._AC_SL1331_.jpg",
              'description'=>"This product works and looks like new. Backed by the 90-day Amazon Renewed Guarantee.
              - This pre-owned product has been professionally inspected, tested and cleaned by Amazon-qualified suppliers.
              - There will be no visible cosmetic imperfections when held at an arms length.
              - Products with batteries will exceed 80% capacity relative to new.
              - Accessories may not be original, but will be compatible and fully functional. Product may come in generic box.
              - This product is eligible for a replacement or refund within 90 days of receipt if you are not satisfied under the Amazon Renewed Guarantee. See terms here.",
              'feature'=> 0],
               //13
             ['name'=> "Electro-Voice ZLX-12BT 12 1000W Bluetooth Powered Loudspeaker",
             'manu_id'=>9,
             'type_id'=>5,
             'price'=>499.00,
             'image'=>"81Z78Ezg9ZL._AC_SL1500_.jpg",
             'description'=>"Highquality Bluetooth  audio streaming for background music or musical accompaniment
             Three optimally located handles and a rugged composite structure
             Highefficiency 1000 W ClassD power amplifier delivers up to 126 dB peak SPL utilizing transducers designed and engineered by EV
             EVpatented Signal Synchronized Transducers (SST) waveguide design provides precise and consistent coverage, minimal distortion, and maximized acoustical loading",
             'feature'=> 0],
              //14
              ['name'=> "Electro-Voice EKX15 15 2 Way Full Range 1600W Passive Loudspeaker
              ",
              'manu_id'=>9,
              'type_id'=>5,
              'price'=>329.00,
              'image'=>"91ubK96uhmL._AC_SX522_.jpg",
              'description'=>"1600 W (peak), 132 dB peak SPL utilizing high-sensitivity transducers designed and engineered by EV
              EV-patented Signal Synchronized Transducers (SST) waveguide design provides precise and consistent coverage
              Lightweight, compact 15-mm wood enclosure with internal bracing, and durable EVCoat finish. Axial Sensitivity (SPL, 1 W @ 1 m)- 96dB (Full Space Measurement)
              Eight M10 threaded mounting points, aluminum pole mounts, and all-metal handles
              90˚ x 60˚ pattern for best coverage on mid-size stages. 40˚ monitor angle with rubber feet
              Note: Products with electrical plugs are designed for use in the US. Outlets and voltage differ internationally and this product may require an adapter or converter for use in your destination. Please check compatibility before purchasing.",
              'feature'=> 1],
               //15
             ['name'=> "Mackie SRM Series, 12-Inch, 1000W High-Definition Portable Powered Loudspeaker (SRM450v3)
             ",
             'manu_id'=>10,
             'type_id'=>5,
             'price'=>499.99,
             'image'=>"711FuKQ-j7L._AC_SY550_.jpg",
             'description'=>"1000W system power paired with custom transducers deliver gig-level volumes with room to spare
             High-Definition Audio Processing for professional sound with unmatched clarity
             Quick one-button Speaker Mode selection for application-specific voicing (PA, DJ, Monitor and Soloist)
             Effortlessly eliminate nasty feedback with one-button automatic Feedback Destroyer
             Integrated 2-channel mixer featuring dual Mackie Wide-Z inputs",
             'feature'=> 1],
             //16
             ['name'=> "Hot Tools 24K Gold One-Step Hair Dryer and Volumizer | Style and Dry, Professional Blowout with Ease",
             'manu_id'=>2,
             'type_id'=>1,
             'price'=>46.88,
             'image'=>"71QBEI8EpCL._SL1500_.jpg",
             'description'=>"ONE-STEP: Quick, even heat and charcoal-infused bristles mean you can achieve beautiful blowouts with ease — in a fraction of the time.
             DESIGN: The versatile oval brush design has gently curved sides created to smooth hair, while the rounded edges help craft volume from the roots down to beautifully curled ends.
             IONIC TECHNOLOGY: Helps maintain a neutral charge on the hairs surface, leaving the hair looking conditioned and smooth, while helping reduce frizz and static.
             ALL HAIR TYPES: Complete with a rotating temperature control and 2 heat/ speed settings providing ultimate styling control. Fast styling, great results for all hair types.
             COMFORTABLE: The lightweight design and soft-touch finish provide a relaxed grip. Equipped with an 8 ft. professional cord giving you free range of movement and all the reach you need.
             SYLISTS PREFERRED: Hot Tools heritage is rooted in the professional community. Were proud we’ve been a trusted, stylist-recommended brand since we began in 1990.",
             'feature'=> 0],
             //17
             ['name'=> "HOT TOOLS Pro Artist Black Gold Heated Hair Styling Round Brush",
             'manu_id'=>2,
             'type_id'=>1,
             'price'=>70.22,
             'image'=>"71jS1-pRG9L._SL1500_.jpg",
             'description'=>"Revive locks and help refresh your style on 2nd or even 3rd day hair.
             Micro-Shine finish that resists corrosion from regular use of styling products.
             The exclusive H12 Oval Design smooths, shapes, and adds volume helping refresh hair
             Ten variable heat settings reach up to 430˚F
             Features dual voltage great for
             Equipped with Auto-Shut Off for peace of mind",
             'feature'=> 0],    
             //18
             ['name'=> "Hot Tools Helix Turbo Ionic Tourmaline Salon Dryer Lite",
             'manu_id'=>2,
             'type_id'=>1,
             'price'=>55.00,
             'image'=>"81rgS2lvFyL._SL1500_.jpg",
             'description'=>"Turbo Ionic Lite Blow Dryer
             Lightweight
             Quiet operation
             Ion Technology",
             'feature'=> 0],    
             //19
             ['name'=> "HOT TOOLS Professional 3/4” Hot Air Styling Brush, Black",
             'manu_id'=>2,
             'type_id'=>1,
             'price'=>25.66,
             'image'=>"51amMDS+Q7L_SL1000_.jpg",
             'description'=>"The tool to finish your look, touch it up or reimagine your 2nd-day style.
             2 Heat/Speed Settings for full-bodied curls
             Unique flexible, ball-tipped bristles gently comb and pull strands of hair for smooth results
             ¾” Barrel and Curl Release feature great for second-day styling variety
             8 ft professional Cord",
             'feature'=> 0],    
            //20
            ['name'=> "TCL 32-inch 1080p Roku Smart LED TV - 32S327, 2019 Model",
             'manu_id'=>11,
             'type_id'=>6,
             'price'=>168.00,
             'image'=>"71wYJc19PiL._AC_SL1500_.jpg",
             'description'=>"Easy Voice Control: Works with Amazon Alexa or Google Assistant to help you find movie titles, launch or change channels, even switch inputs, using just your voice. Also available through the Roku mobile app
             Smart Functionality offers access to over 5,000 streaming channels featuring more than 500,000 movies and TV episodes via Roku TV
             1080p Full HD Resolution excellent detail, color, and contrast. Wireless Connection: 802.11 2x2 Dual Band
             Direct-lit LED produces great picture quality with 60Hz refresh rate for fast moving action scenes with virtually no motion blur. Screw Size : M4 x 8
             Inputs: 3 HDMI, 1 USB, RF, Composite, Headphone Jack, optical audio out",
             'feature'=> 1],   
             //21
            ['name'=> "SAMSUNG 32-inch Class LED Smart FHD TV 1080P (UN32N5300AFXZA, 2018 Model)",
            'manu_id'=>4,
            'type_id'=>6,
            'price'=>168.00,
            'image'=>"91UsHjAPTlL._AC_SL1500_.jpg",
            'description'=>"Full HD 1080p Resolution - Enjoy a viewing experience that is 2x the clarity of standard HD TVs.
            Smart TV - Get to your entertainment the faster, easier, and more intelligent way. Easily access your streaming services all in one place using the Samsung Remote Control.
            Micro Dimming Pro - Reveal a more true-to-life picture with enhanced contrast.
            Quad Core Processor: enjoy a Fluid browsing experience and faster control switching between apps, streaming content and other media effortlessly.
            Dimensions: Without Stand 28.9 W x 17.3 H x 3.1 D | With Stand 28.9 W x 18.2 H x 6.4 D. Stand Size (WxHxD)-5.4 x 6.5 x 1.8 inches
            Inputs Outputs: Two HDMI Input, One Component Video Input, One RF In (Satellite Input), One RF In (Terrestrial Cable Input), One USB Input, One Composite In (AV), One Ethernet (LAN) and One Digital Audio Out (Optical)",
            'feature'=> 0],   
            //22
            ['name'=> "LG Electronics 24LJ4540-WU 24-Inch 720p LED HD TV, white",
            'manu_id'=>12,
            'type_id'=>6,
            'price'=>136.99,
            'image'=>"91UsHjAPTlL._AC_SL1500_.jpg",
            'description'=>"Dimensions: 21.9 W x 13.6 H x 2.1 D (TV without stand) | 21.9 W x 15.2 H x 5.8 D (TV with stand)
            No smart functionality.
            720p HD resolution for a crisp picture. Direct-lit LED produces great picture quality. Resolution - 1366 x 768. Brightness (Typ.)- 180 cd/m2. Pixel pitch(mm)- 0.38175x0.38175
            60Hz refresh rate allows fast moving action scenes to be seen with minimal motion blur (120Hz effective rate).
            Inputs: 1 HDMI, 1 USB, 1 (ATSC); Speaker System: Internal",
            'feature'=> 1], 
            //23
            ['name'=> "LG LTNC11131V 11.1 cu. Ft. Stainless Top Freezer Counter Depth Refrigerator",
            'manu_id'=>12,
            'type_id'=>7,
            'price'=>159.99,
            'image'=>"41IqDiAc2+L._AC_SL1000_.jpg",
            'description'=>"8.49 Cu. Ft. Fridge Capacity | 2.62 Freezer Capacity
            Counter Depth Design
            Multi-Air Flow Freshness System
            Low Decibel Quiet Operation",
            'feature'=> 0], 
            //24
            ['name'=> "Koolatron Urban Series 18 Bottle Slim Dual Zone Wine Cooler, Thermoelectric Wine Fridge, Freestanding Wine Cellar for Home Bar, Kitchen, Apartment, Condo, Cottage",
            'manu_id'=>13,
            'type_id'=>7,
            'price'=>329.99,
            'image'=>"61nxyLAq37L._AC_SX679_.jpg",
            'description'=>"DUAL ZONE COOLING Separately controlled temperature zones let you customize your ideal wine storage environment with a range of 54-66°F (12-18°C) in the 8-bottle upper zone and 46-66°F (8-18°C) in the 10-bottle lower zone
            EXTERNAL TOUCH SCREEN CONTROLS Tap the digital display to easily adjust the temperature in each zone or turn on the interior LED light without opening the door
            FREESTANDING CONVENIENCE Place this attractive, compact unit anywhere there is a power source so your favourite wines are always close at hand
            UV PROTECTIVE DOOR Attractive mirrored glass door protects your wine from damage by harmful UV rays while soft interior lighting subtly highlights your wine collection
            RELIABLE COOLING Eco-friendly thermoelectric technology efficiently cools to 46-66°F (8-18°C) without any vibration or harmful CFCs to ensure your wine is kept at an optimal temperature",
            'feature'=> 1], 
            //25
            ['name'=> "Koolatron Urban Series 20 Bottle Wine Cooler, Black Thermoelectric Wine Fridge, Freestanding Wine Cellar for Home Bar, Small Kitchen, Apartment, Condo, Cottage, RV",
            'manu_id'=>13,
            'type_id'=>7,
            'price'=>238.99,
            'image'=>"615enhJ7bnL._AC_SX679_.jpg",
            'description'=>"DIGITAL TEMPERATURE CONTROL - Temperature control buttons and clear digital display lets you customize the ideal storage environment for red or white wines.
            EXTERNAL TOUCH SCREEN CONTROLS - Tap the digital display to easily adjust the temperature in each zone or turn on the interior LED light without opening the door.
            FREESTANDING CONVENIENCE - Place this attractive, compact unit anywhere there is a power source so your favourite wines are always close at hand.
            UV PROTECTIVE DOOR - Attractive mirrored glass door protects your wine from damage by harmful UV rays while soft interior lighting subtly highlights your wine collection
            CUSTOMIZABLE INTERIOR - Wire racks can be removed to fit larger or irregular shaped bottles with a maximum capacity of 20 standard 750 mL wine bottles",
            'feature'=> 1], 
            //26
            ['name'=> "LG LW6019ER Rated 6,000 BTU Window Air Conditioner with Remote, Cools up to 250 Sq. Ft, Ultra Efficient, Energy Star, 3 Cool & Fan Speeds, 115V, 6000, WhiteRV",
            'manu_id'=>12,
            'type_id'=>8,
            'price'=>309.98,
            'image'=>"81TxYQnSleL._AC_SX679_.jpg",
            'description'=>"6, 000 BTU window air conditioner; 6,000 BTU window air conditioner; Energy Star rating; Cools a room up to 260 sq. ft.; Dehumidification up to 1.8 pints per hour; Full-function remote controls unit from across the room; Thermistor thermostat maintains the selected temperature; 3 cooling speeds / 3 fan speeds; 24-hour on/off timer cools on your schedule; Energy saver function conserves energy and saves you money; Height 12.38; Width 19.38; Depth 19.56; Weight 56.00; Color; Operating System
            Energy star rating; Batteries Included; Batteries Required; Number of Batteries 2; Battery Type AAA Alkaline Battery; Language English; Assembly Required
            Uses standard 115-volt/15-amp electrical outlet
            Cools a room up to 260.00 sq. ft
            Dehumidification up to 1.80 pints per hour.",
            'feature'=> 1], 
            //27
            ['name'=> "TCL 6W3ER1-A Home Series Window-air-Conditioner, 6,000 BTU, White",
            'manu_id'=>11,
            'type_id'=>8,
            'price'=>269.98,
            'image'=>"81pDS9XM8+L._AC_SX679_.jpg",
            'description'=>"POWERFUL COOLING CAPACITY: The 6,000 BTU window air conditioner is powerful enough to cool rooms up to 250 sq. ft. and features multiple fan speeds that allow you to choose your level of comfort.
            COMFORTABLY QUIET: Thoughtfully designed to not disturb you, this ac unit noise level is as low as 50 decibels so you can enjoy serene cooling in peace.
            ENERGY SAVINGS: TCL line of Energy Star Certified window AC units help you save on your energy bill when compared to similar models.
            KEEP YOUR ENERGY BILL LOW: Sleep mode lowers your energy bill to keep you comfortable at night while eco-mode saves you energy during the day.
            COOLING EVERYWHERE YOU NEED IT: Customize the direction of airflow to where you need it most with 8-way cooling using two 4-way directional vents.",
            'feature'=> 0], 
             //28
             ['name'=> "Samsung WE402NV/A3 Pedestal Pededstal, Brushed Black/Black Stainless Steel",
             'manu_id'=>4,
             'type_id'=>9,
             'price'=>251.99,
             'image'=>"71yp--AKJCL._AC_SX425_.jpg",
             'description'=>"GIVE YOUR LAUNDRY A BOOST - Your washer and dryer gets lifted more than a foot off the ground for a more comfortable loading and unloading experience
             ORGANIZE YOUR LAUNDRY ESSENTIALS - Keep all your necessities in one place with the built-in storage drawer
             DIMENSIONS - Pedestal is 27 x 14.2 x 28.1 (WxHxD)
             WEIGHT - Built tough with a net weight of 366 lbs
             Controls, knobs and door handles are all treated with antimicrobial CleanGuard protection",
             'feature'=> 1], 
             //29
             ['name'=> "COMFEE 1.6 Cu.ft Portable Washing Machine, 11lbs Capacity Fully Automatic Compact Washer with Wheels, 6 Wash Programs Laundry Washer with Drain Pump, Ideal for Apartments, RV, Camping, Magnetic Gray",
             'manu_id'=>14,
             'type_id'=>9,
             'price'=>623.65,
             'image'=>"61m2cCUhdbL._AC_SX679_.jpg",
             'description'=>"Easy to Use: - This portable washing machine has 6 most commonly used programs including Normal, Quick, Heavy, Bulky, Delicate, and Spin Only. You are allowed to quickly start the machine the way you like. You can also add extra rinse time by pressing the “Extra Rinse” button. The washer also has 3 water temperatures, meet your different laundry needs. And it comes with a clear lid that allows you to look over the status of clothing at any time.
             Space saving: - With only 20.7inch in width, 20.3inch in-depth, and 36.6inch in height, this compact washer is able to be stored easily. Fits in your room/RV/dormitory nicely. The large capacity of 1.6cu.ft top load washer can hold 11lbs of cloth. It equips with a stainless steel inner tub which lasts longer.
             Extremely Energy Saving: - This washing machine equips with high quality and durable motor, providing stable power. Saving as much as 84% energy consumption comparing to similar models, our washing machine is able to save money for your household.
             Child Lock: - COMFEE' full-automatic washer care about your family. Child Lock feature allows you to freeze the control panel to make sure everything goes right. Simply press and hold the “Temp” and “Program” button together for 3 seconds and the control panel will no longer respond unless the press and hold again.
             Delay Start & Reloading Feature: - “Delay Start” function could save a big hassle for you. Simply throw your laundry in, and set a time when you want it to start, avoiding the headache of having to wash them all over again because of the smell. No need to power off and restart the machine if anything lost behind. Long press Start/Pause button for 3 seconds, you can have your laundry added before the main washing cycle finishes.",
             'feature'=> 1], 
             //30
             ['name'=> "Dreo 36'' Nomad One Tower Fan with Remote, 24ft/s Velocity Quiet Cooling Fan, 90° Oscillating Fan with 4 Speeds, 4 Modes, 8H Timer, Bladeless Fan, Standing Floor Fans, Black, (DR-HTF007)",
             'manu_id'=>15,
             'type_id'=>10,
             'price'=>59.99,
             'image'=>"71KGfLoEBzL._AC_SY879_.jpg",
             'description'=>"Powerful Meets Portable: Dreo's all-in-one airflow system combines with a supercharged electric motor, delivering high-speed, brisk cool. This 36-inch compact tower fan enlivens every inch of air in your living space fast at up to 24ft/s.
             Cut Out the Noise: Enjoy all-day serenity and comfort, enabled by its algorithmic impeller design and the magical Conada effect. Along with display auto off, auto mute in Sleep mode, 8h timer, and soothing airflow, you can always get a restful sleep whenever you need it.
             Easy to Clean & Safe to Use: Removable rear grille and impeller wheel make cleaning more accessible. Designed with fingertip pinch-proof grills, a fused plug and built-in circuit protection, this ETL-listed tower fan ensures safety is always prioritized.
             Far and Vast: 90° oscillation and calibrated airflow path allow this oscillating fan to cover more areas in the room. Combine with your cooling air conditioner to cut cooling costs during hot days.",
             'feature'=> 0], 
             //31
             ['name'=> "Dreo Tower Fan with Remote, 42 Inch Oscillating Bladeless Fan with 6 Speeds, 3 Modes, LED Display, Quiet Indoor Standing Fans for Home Bedroom Office Room, Black Powerful Floor Fan with 12-Hour Timer",
             'manu_id'=>15,
             'type_id'=>10,
             'price'=>89.99,
             'image'=>"71N+qDxpIkS._AC_SY879_.jpg",
             'description'=>"24ft/s Velocity: This tower fan is equipped with a powerful motor and a unique air-duct that can provide a velocity of 24ft/s, effectively distributing airflow around the room. It lets you enjoy the cool quickly
             Lower Noise, More Serenity: This bladeless fan adopts a unique air-duct design with fluid mechanics and minimize noise. Brings a comforting, cool, and ultra-quiet breeze, helping you to sink into a soothing night of rest
             90° Oscillation Tower Fan: Compared to other 65°oscillating fans, for quicker cooling, ours provides wider coverage of airflow to increase indoor air circulation
             6 Speeds+3 Modes + Additional Auto Mode: Customize your breeze with 6 speeds and 3 modes (Normal, Natural, and Sleep). Stay cool on hot summer days in the bedroom, study, or office. If you activate the pedestal fan’s auto mode, the velocity of the wind will automatically change with the temperature, allowing your room to always stay pleasant and healthy",
             'feature'=> 0], 
             //32
             ['name'=> "Whynter ARC-102CS Compact Size 10,000 BTU Portable Air Conditioner, Dehumidifier, Fan with Carbon and SilverShield Filter for Rooms, 215 sq ft, White",
             'manu_id'=>16,
             'type_id'=>10,
             'price'=>339.99,
             'image'=>"71gRlrNIGxL._AC_SX679_.jpg",
             'description'=>"10,000 BTU (ASHRAE) / 5,500 BTU (SACC) cooling capacity. Filter Type: 2 in 1 silver-ion coated washable pre-filter and carbon filter
             Patented auto drain function fully exhausts all condensate automatically in most environments
             Cool, Dehumidify, and fan modes; equipped with Activated Carbon & SilverShield Filter
             Digital and remote control; 2 fan speeds
             Air Flow (at high speed): 350m3/h / 206 CFM",
             'feature'=> 0], 

             //Minh 33
             ['name'=> "Ava BF502A",
             'manu_id'=>17,
             'type_id'=>11,
             'price'=>1690000,
             'image'=>"nckd1.jpg",
             'description'=>"Dung tích sử dụng 5.5 lít, nướng gà nguyên con dưới 2 kg",
             'feature'=> 5], 
             //Minh 34
             ['name'=> "Sunhouse SHD4026",
             'manu_id'=>18,
             'type_id'=>11,
             'price'=>2187000,
             'image'=>"nckd2.jpg",
             'description'=>"Dung tích sử dụng 6 lít phù hợp sử dụng trong gia đình 5 - 6 thành viên",
             'feature'=> 6], 
             //Minh 35
             ['name'=> "Hommy BF525",
             'manu_id'=>19,
             'type_id'=>11,
             'price'=>2570000,
             'image'=>"nckd3.jpg",
             'description'=>"Công suất 2000W cùng công nghệ nướng không khí nóng đối lưu giúp thực phẩm chín nhanh và đều",
             'feature'=> 5], 
             //Minh 36
             ['name'=> "Sunhouse SHD4062",
             'manu_id'=>18,
             'type_id'=>11,
             'price'=>1972000,
             'image'=>"nckd4.jpg",
             'description'=>"Dung tích 5.5 lít có thể chiên gà vịt nguyên con tầm 1.5 kg",
             'feature'=> 5], 

             //Minh 37
             ['name'=> "Kangaroo KG12AF1A",
             'manu_id'=>20,
             'type_id'=>20,
             'price'=>4542000,
             'image'=>"nckd5.jpg",
             'description'=>"Các chức năng gồm chiên không dầu, khoai tây, thịt, cá, tôm, pizza, đùi gà, bánh mỳ, gà nướng nguyên con, sấy khô.",
             'feature'=> 5], 

             // 38 Minh
             ['name'=> "Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2",
             'manu_id'=>21,
             'type_id'=>12,
             'price'=>3490000,
             'image'=>"tainghe1.jpg",
             'description'=>"AirPods 2 - một sản phẩm đã từng làm mưa làm gió trước khi người “anh em” AirPods Pro ra mắt. Đến thời điểm hiện tại, mặc dù không còn hot như Airpods Pro, nhưng Tai nghe Bluetooth AirPods 2 Wireless charge Apple MRXJ2 vẫn còn nhiều đặc điểm khiến sản phẩm này trở nên hấp dẫn và vẫn giữ được vị trí của mình với một lượng fan nhất định.",
             'feature'=> 0],
             // 39 Minh
             ['name'=> "Tai nghe Bluetooth AirPods Pro MagSafe Charge Apple MLWK3 Trắng",
             'manu_id'=>21,
             'type_id'=>12,
             'price'=>5190000,
             'image'=>"tainghe2.jpg",
             'description'=>"Tai nghe Bluetooth AirPods Pro MagSafe Charge Apple MLWK3 trắng được chế tác với vẻ ngoài tinh giản, gam màu trắng trẻ trung, sáng đẹp, phối hợp tuyệt vời với mọi trang phục từ đời thường đến công sở, dự tiệc của bạn. ",
             'feature'=> 0],
             // 40 Minh
             ['name'=> "Tai nghe Bluetooth AirPods 3 Apple MME73 Trắng",
             'manu_id'=>21,
             'type_id'=>12,
             'price'=>4490000,
             'image'=>"tainghe3.jpg",
             'description'=>"Airpods 3 có thiết kế tương tự như AirPods Pro nhưng không còn phần eartips, đường viền và thân ngắn hơn cho âm thanh truyền tải đến tai tối ưu. Bề mặt tai nghe Bluetooth Apple phủ sắc trắng thời thượng, được làm từ các vật liệu tái chế với độ bền cao, bảo vệ môi trường sống của con người.",
             'feature'=> 0],
             // 41 Minh
             ['name'=> "Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc",
             'manu_id'=>4,
             'type_id'=>12,
             'price'=>2490000,
             'image'=>"tainghe4.jpg",
             'description'=>"Tai nghe Bluetooth True Wireless Samsung Buds Pro sở hữu vẻ ngoài đẹp mắt thời thượng với hai màu đen và trắng. Thiết kế mới trên hình dạng tai nghe cổ điển, có khả năng làm giảm bớt sự khó chịu khi sử dụng tai nghe trong nhiều giờ",
             'feature'=> 0],
             // 42 Minh
             ['name'=> "Tai nghe Bluetooth True Wireless JBL T115TWS",
             'manu_id'=>22,
             'type_id'=>12,
             'price'=>990000,
             'image'=>"tainghe5.jpg",
             'description'=>"Thiết kế housing với đường nét tinh tế, uốn cong theo hình oval, bề mặt bằng nhựa sần tốt, bền bỉ, kháng vỡ, cầm nắm dễ chịu, xoay chuyển vị trí linh hoạt để đeo tai vừa vặn. Nút tai silicone mềm mại, nâng cao khả năng cách âm khi chọn nút tai phù hợp với khổ tai của mình.",
             'feature'=> 0],
        ]);
    }
}
