# 設置

## ディレクトリ

- conf
  - ビルド時の設定ファイル
- workspace
  - fuelのインストール場所

## インストール
（最初）workspaceで実行

```bash
docker-compose run workspace
```

```bash
composer create-project fuel/fuel --prefer-dist .
```

## インストール実行時

```bash
docker-compose run workspace
```

```bash
composer install
```

## 参考
- http://fuelphp.jp/docs/1.9/installation/instructions.html