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
    
