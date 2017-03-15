all:
	@chmod +x templates/bin/emWebAdmin
	@templates/bin/emWebAdmin generate
	
clean:
	@chmod +x templates/bin/emWebAdmin
	@templates/bin/emWebAdmin clean

