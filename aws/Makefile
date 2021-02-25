deploy-sakura-pipeline:
	aws --profile $(profile) cloudformation deploy \
		--template ./pipeline.yml \
		--stack-name sakura-$(env)-s3-pipeline \
		--parameter-overrides Env=$(env) \
		--capabilities CAPABILITY_IAM \
		--no-fail-on-empty-changeset

deploy-github:
	aws --profile $(profile) cloudformation deploy \
		--template ./github.yml \
		--stack-name sakura-secrets \
		--parameter-overrides Env=$(env) GithubAccessToken=${github-access-token} \
		--capabilities CAPABILITY_IAM \
		--no-fail-on-empty-changeset
	aws --profile $(profile) ssm put-parameter \
		--name sakura-secrets-github-access-token \
		--type SecureString \
		--value ${github-access-token} \
		--overwrite

