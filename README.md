# 匯率轉換專案說明
## 框架：Laravel
## 執行步驟
1. `git clone`
2. `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`
## API
1. GET /api/currency
2. Query param : 
    - source:USD
    - target:JPY
    - amount:$1,525
    
    |  名稱   |  用途 | 可用參數 |
    |  ----  | ----  | ---- |
    | source  | 使用貨幣 |USD JPY TWD |
    | target  | 欲換貨幣 |USD JPY TWD |
    | amount  | 金額 |固定 $ 開頭 |
## 單元測試說明
1. start with dollar sign : 開頭是否為＄字號
2. round down, round up : 是否四捨五入
## 整合測試說明
1. 測試 status code 是否為 200
2. 測試 response 是否正確
## 測試指令
`php artisan test`
    
