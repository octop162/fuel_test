# 設置

## ディレクトリ

- conf
  - ビルド時の設定ファイル
- workspace
  - fuelのインストール場所

## 初回インストール
workspaceで実行（リセットするときはworkspaceを空にする）

```bash
docker-compose run workspace
```

```bash
composer create-project fuel/fuel --prefer-dist .
```

## インストール後実行時

```bash
docker-compose run workspace
```

```bash
composer install
```

## テスト実施時

```bash
docker-compose run workspace
```

```bash
php oil test
```

## 参考
- http://fuelphp.jp/docs/1.9/installation/instructions.html