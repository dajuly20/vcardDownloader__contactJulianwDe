IMAGE   := contact-julianw
CONTAINER := contact-julianw-test
PORT    := 8080

.DEFAULT_GOAL := help

help:
	@echo "Targets:"
	@echo "  make docker        — Build Docker image and run on http://localhost:$(PORT)"
	@echo "  make installLocal  — Copy files to local Apache webroot (/var/www/html)"
	@echo "  make clean         — Stop and remove the Docker container"

# ── Docker ────────────────────────────────────────────────────────────────────
docker:
	docker build -t $(IMAGE) .
	@docker rm -f $(CONTAINER) 2>/dev/null || true
	docker run -d --name $(CONTAINER) -p $(PORT):80 $(IMAGE)
	@echo "Running at http://localhost:$(PORT)"
	@sleep 1 && xdg-open http://localhost:$(PORT) 2>/dev/null & true

# ── Local Apache install ───────────────────────────────────────────────────────
installLocal:
	@echo "Copying files to /var/www/html/ ..."
	sudo rsync -av --exclude='.git' --exclude='Makefile' --exclude='Dockerfile' \
	    --exclude='.dockerignore' --exclude='*.md' --exclude='oldIndex.php' \
	    --exclude='old.htaccess' \
	    ./ /var/www/html/
	@echo "Done. Open http://localhost/ in your browser."

# ── Cleanup ───────────────────────────────────────────────────────────────────
clean:
	@docker rm -f $(CONTAINER) 2>/dev/null && echo "Container $(CONTAINER) removed." || echo "No running container found."

.PHONY: help docker installLocal clean
