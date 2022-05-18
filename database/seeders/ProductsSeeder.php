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
             ['name'=> "RoyalBaby Freestyle Kids Bike 12 14 16 18 20 Inch Children’s Bicycle for Age 3-12 Years Boys Girls
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
              THIN, LIGHT, POWERFUL: With a PC this powerful, you’ll want to take it with you wherever you go; And you can! At less than 2 pounds, Galaxy Book2 Pro is our thinnest and lightest laptop yet
              BRILLIANT, BRIGHT, BEAUTIFUL: Whether you're scrolling through your social feed or video chatting with your bestie, everything looks amazing on a stunning AMOLED screen that’s up to 33% brighter;* Available in two sizes (13.3 and 15.6)
              VIDEO CHAT IN HIGH DEFINITION: Galaxy Book2 Pro features an upgraded full HD camera with a 1080p wide-angle view that’s 2x clearer* than before; You’ll sound amazing too with upgraded Dolby Atmos sound and intelligent noise canceling
              LONG LASTING CHARGE, POWERS UP FAST: Galaxy Book2 Pro features our longest-lasting battery to keep you going for hours and hours on a single charge; When you finally do need a jolt of power, get energized faster with a universal fast charger that gets you 40% of battery power back in just 30 minutes
              INNOVATION THAT MOVES YOU FORWARD: Get the combined capabilities of a laptop and a tablet with a versatile 2 in 1 design that features a 360° hinge; Bring ideas to life on the screen with an included S Pen that feels like a real pen
              UNITE YOUR GALAXY, MULTIPLY THE POSSIBILITIES: All of your Galaxy devices sync to help you do more; Pair them up and take control of an interconnected network of seemingly unlimited possibilities; Access a file, photo or text on any device
              › See more product details
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
              - There will be no visible cosmetic imperfections when held at an arm’s length.
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
             'description'=>"High‑quality Bluetooth  audio streaming for background music or musical accompaniment
             Three optimally located handles and a rugged composite structure
             High‑efficiency 1000 W Class‑D power amplifier delivers up to 126 dB peak SPL utilizing transducers designed and engineered by EV
             EV‑patented Signal Synchronized Transducers (SST) waveguide design provides precise and consistent coverage, minimal distortion, and maximized acoustical loading",
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
             IONIC TECHNOLOGY: Helps maintain a neutral charge on the hair’s surface, leaving the hair looking conditioned and smooth, while helping reduce frizz and static.
             ALL HAIR TYPES: Complete with a rotating temperature control and 2 heat/ speed settings providing ultimate styling control. Fast styling, great results for all hair types.
             COMFORTABLE: The lightweight design and soft-touch finish provide a relaxed grip. Equipped with an 8 ft. professional cord giving you free range of movement and all the reach you need.
             SYLISTS PREFERRED: Hot Tools heritage is rooted in the professional community. We’re proud we’ve been a trusted, stylist-recommended brand since we began in 1990.",
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
             'image'=>"51amMDS+Q7L._SL1000_.jpg",
             'description'=>"The tool to finish your look, touch it up or reimagine your 2nd-day style.
             2 Heat/Speed Settings for full-bodied curls
             Unique flexible, ball-tipped bristles gently comb and pull strands of hair for smooth results
             ¾” Barrel and Curl Release feature – great for second-day styling variety
             8 ft professional Cord",
             'feature'=> 0],    

        ]);
    }
}
