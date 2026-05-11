.PHONY: shell shell-docs docs docs-build test test-8.3 test-8.4 test-8.5
shell:
	docker compose run -it --rm --entrypoint /bin/sh app
shell-docs:
	docker compose run -it --rm --entrypoint /bin/sh pages
docs:
	docker compose up pages
docs-build:
	docker compose run --rm pages build
test:
	docker compose run --rm -it app
test-8.3:
	PHP_VERSION=8.3 docker compose build
	docker compose run --rm -it app
test-8.4:
	PHP_VERSION=8.4 docker compose build
	docker compose run --rm -it app
test-8.5:
	PHP_VERSION=8.5 docker compose build
	docker compose run --rm -it app
