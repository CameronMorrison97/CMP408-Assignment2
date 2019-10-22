KERNEL := /home/cam/linux/linux
PWD := $(shell pwd)
obj-m += piio.o
CROSS=/home/cam/tools/arm-bcm2708/arm-linux-gnueabihf/bin/arm-linux-gnueabihf-

all:
	make -k ARCH=arm CROSS_COMPILE=$(CROSS) -C $(KERNEL) SUBDIRS=$(PWD) modules
clean:
	make -C $(KERNEL) SUBDIRS=$(PWD) clean

