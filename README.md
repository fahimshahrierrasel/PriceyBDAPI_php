# Pricybd API

**Priceybd API** is support API for priceybd mobile and web application.
All the information about the API and source code of the api is avilable here.
place all this file to your htdocs to test this API.



### API Requests
 
| # | Requests | Method |
| :---: | :----------: | :--------: |
| 1 | `http://localhost/` | get |
| 2 | `http://localhost/hello/your name` | get |
| 3 | `http://localhost/alldevices` | get|
| 4 | `http://localhost/device/mobile_id` | get |


 
 
 
### Requests Output
 
#### `http://localhost/` (get)
 
Simple welcome screen about the API.


 
#### `http://localhost/hello/your name` (get)
A welcome screen to greeting you.

**example :** `http://localhost/hello/A strange man`


#### `http://localhost/alldevices` (get)
Will return all the avilable devices in the Database.

**example :** `http://localhost/alldevices`

**Return value:**

```json

[
    {
        "MOBILE_ID": "1",
        "BRAND": "Samsung",
        "MODEL_NAME": "Samsung Galaxy Note 7",
        "NETWORK": "GSM/HSPA/LTE",
        "LAUNCH": "2016, September 2",
        "DISPLAY_SIZE": "5.7 inches",
        "DISPLAY_RESOLUTION": "1440 x 2560 pixels",
        "DISPLAY_TYPE": "Super AMOLED capacitive touchscreen",
        "SIM_TYPE": "Nano-SIM",
        "WEIGHT": "169 gm",
        "OS": "Android OS, v6.0.1 (Marshmallow)",
        "CHIPSET": "Exynos 8890 Octa",
        "CPU": "Octa-core (4x2.3 GHz Mongoose & 4x1.6 GHz Cortex-A53)",
        "GPU": "Mali-T880 MP12",
        "MEMORY_RAM": "4 GB",
        "MEMORY_INTERNAL": "64 GB",
        "MEMORY_EXTERNAL": "microSD",
        "PRIMARY_CAMERA": "12 MP",
        "SECONDARY_CAMERA": "5 MP",
        "CAMERA_FEATURES": "1/2.5\" sensor size, 1.4 micro pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus, face/smile detection, Auto HDR, panorama",
        "BATTERY_TYPE": "3500 mAh",
        "BLUETOOTH": "v4.2, A2DP, EDR, LE",
        "WIFI": "802.11 a/b/g/n/ac",
        "NFC": "Yes",
        "OTG": "Yes",
        "RADIO": "No",
        "GPS": "Yes, A-GPS, GLONASS",
        "USB": "v3.1, Type-C",
        "SENSORS": "Iris scanner, fingerprint, accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2",
        "COLORS": "Blue Coral, Gold Platinum, Silver Titanium, Black Onyx",
        "DIMENSIONS": "153.5 x 73.9 x ",
        "PHOTO": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg",
        "THUMBNAIL": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg"
    },
    {
        "MOBILE_ID": "2",
        "BRAND": "Samsung",
        "MODEL_NAME": "Samsung Galaxy Note 7 (USA)",
        "NETWORK": "GSM/HSPA/LTE",
        "LAUNCH": "2016, September 2",
        "DISPLAY_SIZE": "5.7 inches",
        "DISPLAY_RESOLUTION": "1440 x 2560 pixels",
        "DISPLAY_TYPE": "Super AMOLED capacitive touchscreen",
        "SIM_TYPE": "Nano-SIM",
        "WEIGHT": "169 gm",
        "OS": "Android OS, v6.0.1 (Marshmallow)",
        "CHIPSET": "Exynos 8890 Octa",
        "CPU": "Octa-core (4x2.3 GHz Mongoose & 4x1.6 GHz Cortex-A53)",
        "GPU": "Mali-T880 MP12",
        "MEMORY_RAM": "4 GB",
        "MEMORY_INTERNAL": "64 GB",
        "MEMORY_EXTERNAL": "microSD",
        "PRIMARY_CAMERA": "12 MP",
        "SECONDARY_CAMERA": "5 MP",
        "CAMERA_FEATURES": "1/2.5\" sensor size, 1.4 micro pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus, face/smile detection, Auto HDR, panorama",
        "BATTERY_TYPE": "3500 mAh",
        "BLUETOOTH": "v4.2, A2DP, EDR, LE",
        "WIFI": "802.11 a/b/g/n/ac",
        "NFC": "Yes",
        "OTG": "Yes",
        "RADIO": "No",
        "GPS": "Yes, A-GPS, GLONASS",
        "USB": "v3.1, Type-C",
        "SENSORS": "Iris scanner, fingerprint, accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2",
        "COLORS": "Blue Coral, Gold Platinum, Silver Titanium, Black Onyx",
        "DIMENSIONS": "153.5 x 73.9 x ",
        "PHOTO": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg",
        "THUMBNAIL": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg"
    }
]

```


#### `http://localhost/device/mobile_id` (get)
Will return a device if it is avilable in the Database.

**example :** `http://localhost/device/2`

**Return value:**


```json
{
    "MOBILE_ID": "2",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy Note 7 (USA)",
    "NETWORK": "GSM/HSPA/LTE",
    "LAUNCH": "2016, September 2",
    "DISPLAY_SIZE": "5.7 inches",
    "DISPLAY_RESOLUTION": "1440 x 2560 pixels",
    "DISPLAY_TYPE": "Super AMOLED capacitive touchscreen",
    "SIM_TYPE": "Nano-SIM",
    "WEIGHT": "169 gm",
    "OS": "Android OS, v6.0.1 (Marshmallow)",
    "CHIPSET": "Exynos 8890 Octa",
    "CPU": "Octa-core (4x2.3 GHz Mongoose & 4x1.6 GHz Cortex-A53)",
    "GPU": "Mali-T880 MP12",
    "MEMORY_RAM": "4 GB",
    "MEMORY_INTERNAL": "64 GB",
    "MEMORY_EXTERNAL": "microSD",
    "PRIMARY_CAMERA": "12 MP",
    "SECONDARY_CAMERA": "5 MP",
    "CAMERA_FEATURES": "1/2.5\" sensor size, 1.4 micro pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus, face/smile detection, Auto HDR, panorama",
    "BATTERY_TYPE": "3500 mAh",
    "BLUETOOTH": "v4.2, A2DP, EDR, LE",
    "WIFI": "802.11 a/b/g/n/ac",
    "NFC": "Yes",
    "OTG": "Yes",
    "RADIO": "No",
    "GPS": "Yes, A-GPS, GLONASS",
    "USB": "v3.1, Type-C",
    "SENSORS": "Iris scanner, fingerprint, accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2",
    "COLORS": "Blue Coral, Gold Platinum, Silver Titanium, Black Onyx",
    "DIMENSIONS": "153.5 x 73.9 x ",
    "PHOTO": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg"
}

```


  
 
 
