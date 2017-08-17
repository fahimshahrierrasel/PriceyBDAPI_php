# Pricybd API

**Priceybd API** is support API for priceybd mobile and web application.
All the information about the API and source code of the api is avilable here.
place all this file to your htdocs to test this API.



### API Requests
 
| # | Requests | Method | Information |
| :---: | :---------- | :--------: | :-------- |
| 1 | `http://localhost/` | get | API information |
| 2 | `http://localhost/hello/your name` | get | Welcome to the API friend |
| 3 | `http://localhost/devices` | get| All avilable devices details information |
| 4 | `http://localhost/device/mobile_id` | get | A single device details information |
| 5 | `http://localhost/devicesshortinfo` | get | All avilable devices short information |
| 6 | `http://localhost/directsortdevices/:sortKey/:sortValue` | get | Sorted devices which fulfuil the direct condition |
| 7 | `http://localhost/sortdevices/:sortKey/:sortValue` | get | All available device fulfuil this condition ( sorted device will have configuration greater or equal ( >= ) to the expected condition)| 
| 8 | `http://localhost/allshops` | get | All shops information |
| 9 | `http://localhost/shop/shop_id` | get | A specific the shop information |
| 10 | `http://localhost/deviceprice/mobile_id` | get | Price of the device |
| 11 | `http://localhost/sortbyprice/:price` | get | Show all devices which price is less or equal ( <= ) of the given price |
| 12 | `http://localhost/brands` | get | All information of the brands including their image resources |

 

---

### Requests Output
 
#### `http://localhost/` (get)
 
Simple welcome screen about the API.

---
 
#### `http://localhost/hello/your name` (get)
A welcome screen to greeting you.

**example :** `http://localhost/hello/A strange man`

---

#### `http://localhost/devices` (get)
Will return all the avilable devices full details.

**example :** `http://localhost/devices`

**Return value:**

```json
{
  "devices": [
    {
      "ModelName": "Motorola Moto Z Play",
      "NetTechnology": "GSM / CDMA / HSPA / LTE",
      "2GBands": "GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual-SIM model only)",
      "3GBands": "HSDPA 850 / 900 / 1900 / 2100",
      "4GBands": "LTE band 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 13(700) - USA",
      "Speed": "HSPA, LTE",
      "GPRS": "Yes",
      "EDGE": "Yes",
      "Announced": "2016, August",
      "Status": "Coming soon. Exp. release 2016, September",
      "BodyDimensions": "156.4 x 76.4 x 7 mm (6.16 x 3.01 x 0.28 in)",
      "BodyWeight": "165 g (5.82 oz)",
      "SimType": "Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)",
      "BodyFeatures": "Water repellent nano-coating (IP52 certified)",
      "DisplayType": "Super AMOLED capacitive touchscreen, 16M colors",
      "DisplaySize": "5.5",
      "DisplayResolution": "1080 x 1920",
      "DisplayProtection": "No",
      "DisplayFeatures": "No",
      "Os": "Android OS, v6.0.1 (Marshmallow)",
      "Chipset": "Qualcomm MSM8953 Snapdragon 625",
      "CpuType": "Octa-core 2.0 GHz Cortex-A53",
      "Gpu": "Adreno 506",
      "MemoryRam": "3",
      "MemoryOption": "32 GB",
      "MemoryExpand": "microSD, up to 256 GB",
      "PrimaryCameraFeatures": "16 MP, f/2.0, phase detection and laser autofocus, dual-LED (dual tone) flash",
      "Video": "2160p@30fps, 1080p@30fps, 720p@120fps",
      "SecondaryCameraFeatures": "5 MP, f/2.2, 1.4 µm pixel size, LED flash, 1080p",
      "CameraFeatures": "1.3 µm pixel size, geo-tagging, touch focus, face detection, panorama, HDR",
      "SoundAlertTypes": "Vibration; MP3, WAV ringtones",
      "SoundLoudspeaker": "Yes",
      "SoundJack": "Yes",
      "SoundFeatures": "Active noise cancellation with dedicated mic",
      "Wifi": "Wi-Fi 802.11 a/b/g/n, Wi-Fi Direct, hotspot",
      "Bluetooth": "v4.0, A2DP, LE",
      "Gps": "Yes, with A-GPS",
      "Nfc": "Yes",
      "Radio": "To be confirmed",
      "Usb": "Type-C 1.0 reversible connector, magnetic connector",
      "Sensors": "Fingerprint, accelerometer, gyro, proximity, compass",
      "Messaging": "SMS(threaded view), MMS, Email, Push Email, IM",
      "Browser": "HTML5",
      "Java": "No",
      "OtherFeatures": "MP3/AAC+/WAV/Flac player\r\nMP4/H.264 player\r\nPhoto/video editor\r\nDocument viewer",
      "BatteryType": "Non-removable Li-Ion 3510 mAh battery",
      "BatteryCapacity": "3510",
      "BatteryTalktime": "No Info",
      "BatteryMusicplay": "No Info",
      "Colors": "Black, White",
      "Performance": "No Info"
    },
    {
      "ModelName": "Xiaomi Redmi Note 3",
      "NetTechnology": "GSM / HSPA / LTE",
      "2GBands": "GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2",
      "3GBands": "HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100",
      "4GBands": "LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 38(2600), 39(1900), 40(2300), 41(2500)",
      "Speed": "HSPA, LTE",
      "GPRS": "Yes",
      "EDGE": "Yes",
      "Announced": "2016, January",
      "Status": "Released 2016, February",
      "BodyDimensions": "150 x 76 x 8.7 mm (5.91 x 2.99 x 0.34 in)",
      "BodyWeight": "164 g (5.78 oz)",
      "SimType": "Dual SIM (Micro-SIM/Nano-SIM, dual stand-by)",
      "BodyFeatures": "",
      "DisplayType": "IPS LCD capacitive touchscreen, 16M colors",
      "DisplaySize": "5.5",
      "DisplayResolution": "1080 x 1920",
      "DisplayProtection": "No",
      "DisplayFeatures": "MIUI 8.0",
      "Os": "Android OS, v5.1.1 (Lollipop)",
      "Chipset": "Qualcomm MSM8956 Snapdragon 650",
      "CpuType": "Hexa-core (4x1.4 GHz Cortex-A53 & 2x1.8 GHz Cortex-A72)",
      "Gpu": "Adreno 510",
      "MemoryRam": "2",
      "MemoryOption": "16 GB, 2 GB RAM / 32 GB, 3 GB RAM",
      "MemoryExpand": "microSD, up to 256 GB (uses SIM 2 slot)",
      "PrimaryCameraFeatures": "16 MP, f/2.0, phase detection autofocus, dual-LED (dual tone) flash",
      "Video": "1080p@30fps",
      "SecondaryCameraFeatures": "5 MP, f/2.0, 1080p",
      "CameraFeatures": "Geo-tagging, touch focus, face/smile detection, HDR, panorama",
      "SoundAlertTypes": "Vibration; MP3, WAV ringtones",
      "SoundLoudspeaker": "Yes",
      "SoundJack": "Yes",
      "SoundFeatures": "24-bit/192kHz audio\r\nActive noise cancellation with dedicated mic",
      "Wifi": "Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, hotspot",
      "Bluetooth": "v4.1, A2DP, LE",
      "Gps": "Yes, with A-GPS, GLONASS, BDS",
      "Nfc": "Yes",
      "Radio": "Stereo FM radio, recording",
      "Usb": "microUSB v2.0, USB On-The-Go",
      "Sensors": "Fingerprint, accelerometer, gyro, proximity, compass",
      "Messaging": "SMS(threaded view), MMS, Email, Push Mail, IM",
      "Browser": "HTML5",
      "Java": "No",
      "OtherFeatures": "Fast battery charging\r\nXviD/MP4/H.265 player\r\nMP3/WAV/eAAC+/Flac player\r\nPhoto/video editor\r\nDocument viewer",
      "BatteryType": "Non-removable Li-Po 4000 mAh battery",
      "BatteryCapacity": "4000",
      "BatteryTalktime": "No Inforamtion",
      "BatteryMusicplay": "No Inforamtion",
      "Colors": "Silver, Gray, Gold",
      "Performance": "No Inforamtion"
    }
  ]
}
```

---

#### `http://localhost/device/mobile_id` (get)
Will return a device if it is avilable in the Database.

**example :** `http://localhost/device/2`

**Return value:**


```json
{
  "ModelName": "Motorola Moto Z Play",
  "NetTechnology": "GSM / CDMA / HSPA / LTE",
  "2GBands": "GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual-SIM model only)",
  "3GBands": "HSDPA 850 / 900 / 1900 / 2100",
  "4GBands": "LTE band 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 13(700) - USA",
  "Speed": "HSPA, LTE",
  "GPRS": "Yes",
  "EDGE": "Yes",
  "Announced": "2016, August",
  "Status": "Coming soon. Exp. release 2016, September",
  "BodyDimensions": "156.4 x 76.4 x 7 mm (6.16 x 3.01 x 0.28 in)",
  "BodyWeight": "165 g (5.82 oz)",
  "SimType": "Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)",
  "BodyFeatures": "Water repellent nano-coating (IP52 certified)",
  "DisplayType": "Super AMOLED capacitive touchscreen, 16M colors",
  "DisplaySize": "5.5",
  "DisplayResolution": "1080 x 1920",
  "DisplayProtection": "No",
  "DisplayFeatures": "No",
  "Os": "Android OS, v6.0.1 (Marshmallow)",
  "Chipset": "Qualcomm MSM8953 Snapdragon 625",
  "CpuType": "Octa-core 2.0 GHz Cortex-A53",
  "Gpu": "Adreno 506",
  "MemoryRam": "3",
  "MemoryOption": "32 GB",
  "MemoryExpand": "microSD, up to 256 GB",
  "PrimaryCameraFeatures": "16 MP, f/2.0, phase detection and laser autofocus, dual-LED (dual tone) flash",
  "Video": "2160p@30fps, 1080p@30fps, 720p@120fps",
  "SecondaryCameraFeatures": "5 MP, f/2.2, 1.4 µm pixel size, LED flash, 1080p",
  "CameraFeatures": "1.3 µm pixel size, geo-tagging, touch focus, face detection, panorama, HDR",
  "SoundAlertTypes": "Vibration; MP3, WAV ringtones",
  "SoundLoudspeaker": "Yes",
  "SoundJack": "Yes",
  "SoundFeatures": "Active noise cancellation with dedicated mic",
  "Wifi": "Wi-Fi 802.11 a/b/g/n, Wi-Fi Direct, hotspot",
  "Bluetooth": "v4.0, A2DP, LE",
  "Gps": "Yes, with A-GPS",
  "Nfc": "Yes",
  "Radio": "To be confirmed",
  "Usb": "Type-C 1.0 reversible connector, magnetic connector",
  "Sensors": "Fingerprint, accelerometer, gyro, proximity, compass",
  "Messaging": "SMS(threaded view), MMS, Email, Push Email, IM",
  "Browser": "HTML5",
  "Java": "No",
  "OtherFeatures": "MP3/AAC+/WAV/Flac player\r\nMP4/H.264 player\r\nPhoto/video editor\r\nDocument viewer",
  "BatteryType": "Non-removable Li-Ion 3510 mAh battery",
  "BatteryCapacity": "3510",
  "BatteryTalktime": "No Info",
  "BatteryMusicplay": "No Info",
  "Colors": "Black, White",
  "Performance": "No Info"
}
```

---

#### `http://localhost/devicesshortinfo` (get)
Will return short information of all devices

**example :** `http://localhost/device/devicesshortinfo`

**Return value:**

```json
{
  "devices": [
    {
      "MobileID": "1",
      "ModelName": "Motorola Moto Z Play",
      "Photo": "http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-z-play-1.jpg"
    },
    {
      "MobileID": "2",
      "ModelName": "Xiaomi Redmi Note 3",
      "Photo": "http://cdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-3-1.jpg"
    },
    {
      "MobileID": "3",
      "ModelName": "Samsung Galaxy J7 Prime",
      "Photo": "http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-j7-prime-1.jpg"
    }
  ]
}

```

---

#### `http://localhost/directsortdevices/:sortKey/:sortValue` (get)
Will return sorted devices avilable in the Database.

**example :** `http://localhost/directsortdevices/Brand/Samsung`

**Return value:**

```json
{
  "devices": [
    {
      "MobileID": "3",
      "ModelName": "Samsung Galaxy J7 Prime",
      "Photo": "http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-j7-prime-1.jpg"
    }
  ]
}

```

---


#### `http://localhost/sortdevices/:sortKey/:sortValue` (get)
Will return sorted devices which fulfil the condition of the sort value and the sorted devices value will be >= than the sortValue.

**example :** `http://localhost/sortdevices/MemoryRam/2.5

**Return value:**

```json
{
  "devices": [
    {
      "MobileID": "1",
      "ModelName": "Motorola Moto Z Play",
      "Photo": "http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-z-play-1.jpg"
    },
    {
      "MobileID": "3",
      "ModelName": "Samsung Galaxy J7 Prime",
      "Photo": "http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-j7-prime-1.jpg"
    }
  ]
}

```

---


#### `http://localhost/allshops` (get)
Will return information about all shops
**example :** `http://localhost/allshops`

**Return value:**

```json
{
  "shops": [
    {
      "ShopID": "1",
      "ShopName": "Fahim & Brothers Electronics",
      "ShopAddress": "Ta-214, Middle Badda, Dhaka-1212",
      "ShopEmail": "fahimshahrier2@gmail.com",
      "ShopMobileNumber": "01554070646",
      "Latitude": "23.780082",
      "Longitude": "90.425435"
    },
    {
      "ShopID": "2",
      "ShopName": "Rifat & Brothers Mobiles",
      "ShopAddress": "Gulshan DCC Market, Gulshan, Dhaka-1212",
      "ShopEmail": "rabiulawal@gmail.com",
      "ShopMobileNumber": "01521216288",
      "Latitude": "23.779468",
      "Longitude": "90.415699"
    }
  ]
}

```

---

#### `http://localhost/shop/shop_id` (get)
Will return a specific shop information

**example :** `http://localhost/shop/1`

**Return value:**

```json
{
      "ShopID": "2",
      "ShopName": "Rifat & Brothers Mobiles",
      "ShopAddress": "Gulshan DCC Market, Gulshan, Dhaka-1212",
      "ShopEmail": "rabiulawal@gmail.com",
      "ShopMobileNumber": "01521216288",
      "Latitude": "23.779468",
      "Longitude": "90.415699"
}

```

---


#### `http://localhost/deviceprice/:mobile_id` (get)
Will return prices of a specific device

**example :** `http://localhost/deviceprice/1`

**Return value:**

```json
{
  "prices": [
    {
      "PriceID": "5",
      "ShopID": "1",
      "Price": "25300"
    },
    {
      "PriceID": "6",
      "ShopID": "2",
      "Price": "25400"
    }
  ]
}

```

---

#### `http://localhost/sortbyprice/:price` (get)
Will return all avilable devices which price is less or equal than the expected price

**example :** `http://localhost/sortbyprice/35000`

**Return value:**

```json
{
  "devices": [
    {
      "MobileID": "2",
      "ModelName": "Xiaomi Redmi Note 3",
      "Photo": "http://cdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-3-1.jpg"
    },
    {
      "MobileID": "3",
      "ModelName": "Samsung Galaxy J7 Prime",
      "Photo": "http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-j7-prime-1.jpg"
    }
  ]
}
```

---

#### `http://localhost/brands` (get)
Will return all brands name and their logo url

**example :** `http://localhost/brands`

**Return value:**

```json
{
  "brands": [
    {
      "BrandID": "1",
      "BrandName": "Samsung",
      "BrandImage": "http://api.treebricks.com/api_res/brand_imgs/samsung.png"
    },
    {
      "BrandID": "2",
      "BrandName": "Apple",
      "BrandImage": "http://api.treebricks.com/api_res/brand_imgs/apple.png"
    },
    {
      "BrandID": "3",
      "BrandName": "Asus",
      "BrandImage": "http://api.treebricks.com/api_res/brand_imgs/asus.png"
    },
    {
      "BrandID": "4",
      "BrandName": "BlackBerry",
      "BrandImage": "http://api.treebricks.com/api_res/brand_imgs/blackBerry.png"
    },
    {
      "BrandID": "5",
      "BrandName": "Sony",
      "BrandImage": "http://api.treebricks.com/api_res/brand_imgs/sony.png"
    },
    {
      "BrandID": "7",
      "BrandName": "HTC",
      "BrandImage": "http://api.treebricks.com/api_res/brand_imgs/htc.png"
    }
  ]
}
```

---


