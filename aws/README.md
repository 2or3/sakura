## Pipeline Name
- sakura-${env}-s3-pipeline

### Overview
- fujisakura.collarks.netをS3へDeployするためのPipeline

### Usage
- [2or3/sakura](https://github.com/2or3/sakura)リポジトリの特定のブランチへPushする
- 対象ブランチ
  - 本番
    - master
  - 検証
    - master
- Deploy先
  - 本番
    - s3://fujisakura.collarks.net/
  - 検証
    - s3://fujisakura.collarks.net/

### Requirement
- AWS CLI v2
- IAMユーザはmfaを必須にしているので、awscliを使う際には注意が必要
  - aws-mfa

### Install

```shell
make deploy-sakura-pipeline profile=[your profile name] env={test|prod}
```

