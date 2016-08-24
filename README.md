# Pricybd API

**Priceybd API** is support API for priceybd mobile and web application.
All the information about the API and source code of the api is avilable here.
place all this file to your htdocs to test this API.



### API Requests
 
| # | Requests | Method | Information |
| :---: | :---------- | :--------: | :--------: |
| 1 | `http://localhost/` | get | API information |
| 2 | `http://localhost/hello/your name` | get | Welcome to the API friend |
| 3 | `http://localhost/alldevices` | get| All avilable devices details information |
| 4 | `http://localhost/device/mobile_id` | get | A single device details information |
| 5 | `http://localhost/devicesshortinfo` | get | All avilable devices short information |
| 6 | `http://localhost/sortdevices?sort_key=_____&sort_value=_____` | get | Sorted short information of devices |
| 7 | `http://localhost/deviceprice/mobile_id` | get | Price of the device |
| 8 | `http://localhost/allshops` | get | All shops information |
| 9 | `http://localhost/shop/shop_id` | get | A specific the shop information |

 

---

### Requests Output
 
#### `http://localhost/` (get)
 
Simple welcome screen about the API.

---
 
#### `http://localhost/hello/your name` (get)
A welcome screen to greeting you.

**example :** `http://localhost/hello/A strange man`

---

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

---

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

---

#### `http://localhost/devicesshortinfo` (get)
Will return short information of all devices

**example :** `http://localhost/device/devicesshortinfo`

**Return value:**

```
[
  {
    "MOBILE_ID": "1",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy Note 7",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg"
  },
  {
    "MOBILE_ID": "2",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy Note 7 (USA)",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg"
  },
  {
    "MOBILE_ID": "3",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy J7 ",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-j7-2016-1.jpg"
  },
  {
    "MOBILE_ID": "4",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy On7 Pro",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-on7-1.jpg"
  },
  {
    "MOBILE_ID": "5",
    "BRAND": "Apple",
    "MODEL_NAME": "Apple iPhone SE",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/pics/apple/apple-iphone-se-01.jpg"
  },
  {
    "MOBILE_ID": "6",
    "BRAND": "Apple",
    "MODEL_NAME": "Apple iPhone 6s Plus",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/pics/apple/apple-iphone6s-plus-1.jpg"
  }
]

```

---

#### `http://localhost/sortdevices?sort_key=_____&sort_value=_____` (get)
Will return sorted devices avilable in the Database.

**example :** `http://localhost/sortdevices?sort_key=BRAND&sort_value=Samsung`

**Return value:**

```json
[
  {
    "MOBILE_ID": "1",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy Note 7",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg"
  },
  {
    "MOBILE_ID": "2",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy Note 7 (USA)",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/bigpic/samsung-galaxy-note7.jpg"
  },
  {
    "MOBILE_ID": "3",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy J7 ",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-j7-2016-1.jpg"
  },
  {
    "MOBILE_ID": "4",
    "BRAND": "Samsung",
    "MODEL_NAME": "Samsung Galaxy On7 Pro",
    "THUMBNAIL": "http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-on7-1.jpg"
  }
]

```

---

#### `http://localhost/deviceprice/mobile_id` (get)
Will return prices of a specific device

**example :** `http://localhost/deviceprice/1`

**Return value:**

```json

[
  {
    "PRICE_ID": "4",
    "MOBILE_ID": "1",
    "SHOP_ID": "2",
    "PRICE": "65200"
  },
  {
    "PRICE_ID": "5",
    "MOBILE_ID": "1",
    "SHOP_ID": "3",
    "PRICE": "65000"
  },
  {
    "PRICE_ID": "6",
    "MOBILE_ID": "1",
    "SHOP_ID": "1",
    "PRICE": "65250"
  },
  {
    "PRICE_ID": "7",
    "MOBILE_ID": "1",
    "SHOP_ID": "4",
    "PRICE": "65600"
  },
  {
    "PRICE_ID": "8",
    "MOBILE_ID": "1",
    "SHOP_ID": "5",
    "PRICE": "65300"
  }
]

```

---

#### `http://localhost/allshops` (get)
Will return information about all shops
**example :** `http://localhost/allshops`

**Return value:**

```json

[
    {
        "SHOP_ID": "1",
        "SHOP_NAME": "Fahim and Sons store",
        "SHOP_ADDRESS": "Jamuna Future Park Dhaka",
        "SHOP_EMAIL": "fahim@gmail.com",
        "SHOP_MOBILE_NUMBER": "01711111111",
        "LATITUDE": "23.812983",
        "LONGITUDE": "90.422188"
    },
    {
        "SHOP_ID": "2",
        "SHOP_NAME": "Kamrul Mobile store",
        "SHOP_ADDRESS": "10 Mirpur Dhaka",
        "SHOP_EMAIL": "kamrul@gmail.com",
        "SHOP_MOBILE_NUMBER": "01711111112",
        "LATITUDE": "23.791355",
        "LONGITUDE": "90.348439"
    },
    {
        "SHOP_ID": "3",
        "SHOP_NAME": "Almas and Brothers Mobile store",
        "SHOP_ADDRESS": "3a Dhanmondi Dhaka",
        "SHOP_EMAIL": "Almas@gmail.com",
        "SHOP_MOBILE_NUMBER": "01711111113",
        "LATITUDE": "23.739629",
        "LONGITUDE": "90.373559"
    },
    {
        "SHOP_ID": "4",
        "SHOP_NAME": "Birat Saha Mobile store",
        "SHOP_ADDRESS": "5b Uttara Dhaka",
        "SHOP_EMAIL": "Birat@gmail.com",
        "SHOP_MOBILE_NUMBER": "01711111114",
        "LATITUDE": "23.890472",
        "LONGITUDE": "90.375955"
    },
    {
        "SHOP_ID": "5",
        "SHOP_NAME": "Rasel Mobile and Gadget store",
        "SHOP_ADDRESS": "Bashundhora Dhaka 1200",
        "SHOP_EMAIL": "Rasel@gmail.com",
        "SHOP_MOBILE_NUMBER": "01711111115",
        "LATITUDE": "23.7652948",
        "LONGITUDE": "90.3888278"
    }
]

```

---

#### `http://localhost/shop/shop_id` (get)
Will return a specific shop information

**example :** `http://localhost/shop/1`

**Return value:**

```json

{
  "SHOP_ID": "5",
  "SHOP_NAME": "Rasel Mobile and Gadget store",
  "SHOP_ADDRESS": "Bashundhora Dhaka 1200",
  "SHOP_EMAIL": "Rasel@gmail.com",
  "SHOP_MOBILE_NUMBER": "01711111115",
  "LATITUDE": "23.7652948",
  "LONGITUDE": "90.3888278"
}

```

---
