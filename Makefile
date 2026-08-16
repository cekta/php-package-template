.PHONY: dev
dev:
	docker compose up -d --remove-orphans

.PHONY: shell
shell: dev
	docker compose exec app sh

.PHONY: ci
ci:
	docker compose run --rm app composer test

.PHONY: test-8.3
test-8.3:
	docker compose down
	PHP_VERSION=8.3 docker compose build
	$(MAKE) dev
	docker compose exec app composer update
	docker compose exec app composer test

.PHONY: test-8.4
test-8.4:
	docker compose down
	PHP_VERSION=8.4 docker compose build
	$(MAKE) dev
	docker compose exec app composer update
	docker compose exec app composer test

.PHONY: test-8.5
test-8.5:
	docker compose down
	PHP_VERSION=8.5 docker compose build
	$(MAKE) dev
	docker compose exec app composer update
	docker compose exec app composer test

.PHONY: docs-shell
docs-shell: dev
	docker compose exec pages sh

.PHONY: docs-build
docs-build: dev
	docker compose exec pages mdbook build
