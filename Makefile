ipver=1.0
app=docker-ip
port=9000

.PHONY: build run all

build:
	@docker build -t ${app}-${ipver} .

run:
	@docker run -p ${port}:80 -d ${app}-${ipver}

all: build run