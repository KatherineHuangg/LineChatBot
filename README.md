# 上課聽歌點名
### 前言
1. 因為新冠疫情的關係，學校要求每進到一間教室就要掃QRCode，但是每次上課都要一直掃顯然非常麻煩，而且QRCode還可能因為反光的關係不一定掃得到。
2. 上課時，有可能會覺得很無聊，也可能因為教室大、距離遠，造成教授的聲音飄渺又令人想睡。
* 因此，我設計了這個LineChatBot，能夠幫助使用者直接導入學校的防疫點名頁面，不用再掃QRCode了!!!!
* 再者，還提供了我最近愛聽的歌，或許能夠讓您耳目一新或是重新拾回精神繼續聽課!
### 構想
* 在一開始時，讓使用者選擇要聽音樂還是進入防疫點名頁面。因此我有兩個選項:『qrcode』和『音樂』
1. 若選擇qrcode，會要求您輸入要選擇的教室。
2. 若選擇音樂，則會問您想聽英文歌、韓文歌還是中文歌，我目前提供各3首讓您做選擇。如果還想聽的話.....就趕快乖乖回去上課吧!!!
:::warning
qrcode功能目前僅提供大三的必修課表，因此若不在此範圍內的教室或課程則將不提供喔!可是會被已讀不回的呢!
:::
### 環境
* windows10

### 語言
* PHP

### 使用教學
1. download exampleCode
[我是範例](https://github.com/GoneToneStudio/line-example-bot-tiny-php?fbclid=IwAR1FrTmbGHcsz9UTYkJBs9DSNWqYVvzrm_i3I0QyZY1ilEffeMhIMD9dhZg)

2. download XAMPP
[點我下載](https://www.apachefriends.org/zh_tw/download.html)
3. install ngrok
```bash=
sudo snap install ngrok
```

4. 在**config.ini**修改自己的Channel access Token和Channel Secret
```bash=1
[Channel]
; 請在雙引號內輸入您的 Line Bot "Channel access token"
Token = "(你的token)"

; 請在雙引號內輸入您的 Line Bot "Channel secret"
Secret = "(你的secret)"
```

5. open XAMPP Control Panel
    * 將這兩項的Actions打開
     ![](https://i.imgur.com/1BiDR8s.png)

6. run ngrok to deploy Line Chat Bot locally
   * 到放置XAMPP的目錄下輸入:
   > D:\xampp> ngrok http 80
   ```bash=1
   ngrok http 80
   ```
7. 
    * do what you want LineChatBot to do by modify your code in data.php
    * Then ctrl+s your code , the result will appear in the LineChatBot!!

### 使用說明
* 基本操作
    * 以下指令可以隨時輸入:
        * start
            * 告訴你可以輸入『qrcode』或『音樂』
        * end
            * 回到目錄
* 架構圖
    * qrcode:
        * 輸入選擇的教室:
            * 4263,
            * 65203,
            * 65304,
            * 65405
        * 就會顯示該教室的相關資訊:
            * 課程、教授、時間等等
    * 音樂:
        * 輸入想聽的音樂類型:
            * 英
            * 韓
        * 就會顯示3首我最近愛聽的歌推薦給你

* 使用示範:

![](https://i.imgur.com/FqARBx5.jpg)

![](https://i.imgur.com/4oLg1W8.jpg)


* FSM
![](https://i.imgur.com/xszbC2a.png)
