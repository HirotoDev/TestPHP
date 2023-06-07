.PHONY: test

ROOTDIR = example-app

make_migration:
	cd $(ROOTDIR)
	@read -p "Enter migration name: " value
	{
		php artisan make:migration $$value;
	}

make_test:
	

make_model:

make_controller:

install_composer:

update_composer:

clear_cache:

clear_logs:

show_logs:



###########################################################TEST################################################################

# .ONESHELL:
# run:
# 	@read -p "ENTER EXAMPLE NAME: " appname
# 	(
# 		cd "$$appname";
# 		flutter clean;
# 		flutter pub get;
# 		flutter format lib/;
# 		flutter analyze;
# 		flutter run -d web-server --web-renderer html;
# 	)

VAL:= $(shell date +%M:%S:%N)
run:
	@echo $(VAL)