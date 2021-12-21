exp_exec_prefix = /app/.heroku/php
exp_bindir = /app/.heroku/php/bin
exp_sbindir = /app/.heroku/php/sbin
exp_libdir = /app/.heroku/php/lib
exp_libexecdir = /app/.heroku/php/libexec
exp_mandir = /app/.heroku/php/man
exp_sysconfdir = /app/.heroku/php/etc/apache2
exp_datadir = /app/.heroku/php/share/apache2
exp_installbuilddir = /app/.heroku/php/share/apache2/build
exp_errordir = /app/.heroku/php/share/apache2/error
exp_iconsdir = /app/.heroku/php/share/apache2/icons
exp_htdocsdir = /app/.heroku/php/share/apache2/htdocs
exp_manualdir = /app/.heroku/php/share/apache2/manual
exp_cgidir = /app/.heroku/php/share/apache2/cgi-bin
exp_includedir = /app/.heroku/php/include/apache2
exp_localstatedir = /app/.heroku/php/var/apache2
exp_runtimedir = /app/.heroku/php/var/apache2/run
exp_logfiledir = /app/.heroku/php/var/apache2/log
exp_proxycachedir = /app/.heroku/php/var/apache2/proxy
EGREP = /usr/bin/grep -E
PCRE_LIBS = -lpcre
SHLTCFLAGS = -prefer-pic
LTCFLAGS = -prefer-non-pic -static
MKINSTALLDIRS = /app/.heroku/php/share/apache2/build/mkdir.sh
INSTALL = $(LIBTOOL) --mode=install /app/.heroku/php/share/apache2/build/install.sh -c
MATH_LIBS = -lm
CRYPT_LIBS = -lcrypt
DTRACE = true
PICFLAGS =
PILDFLAGS =
INSTALL_DSO = yes
ab_CFLAGS =
ab_LIBS = -lssl -lcrypto -luuid -lrt -lcrypt -lpthread -ldl
NONPORTABLE_SUPPORT = checkgid fcgistarter
progname = httpd
OS = unix
SHLIBPATH_VAR = LD_LIBRARY_PATH
INSTALL_SUEXEC = setuid
AP_BUILD_SRCLIB_DIRS = apr apr-util
AP_CLEAN_SRCLIB_DIRS = apr-util apr
HTTPD_VERSION = 2.4.51
HTTPD_MMN = 20120211
bindir = ${exec_prefix}/bin
sbindir = ${exec_prefix}/sbin
cgidir = ${datadir}/cgi-bin
logfiledir = ${localstatedir}/log
exec_prefix = ${prefix}
datadir = ${prefix}/share/apache2
localstatedir = ${prefix}/var/apache2
mandir = ${prefix}/man
libdir = ${exec_prefix}/lib
libexecdir = ${exec_prefix}/libexec
htdocsdir = ${datadir}/htdocs
manualdir = ${datadir}/manual
includedir = ${prefix}/include/apache2
errordir = ${datadir}/error
iconsdir = ${datadir}/icons
sysconfdir = ${prefix}/etc/apache2
installbuilddir = ${datadir}/build
runtimedir = ${localstatedir}/run
proxycachedir = ${localstatedir}/proxy
other_targets =
progname = httpd
prefix = /app/.heroku/php
AWK = mawk
CC = gcc
CPP = gcc -E
CXX =
CPPFLAGS =
CFLAGS =
CXXFLAGS =
LTFLAGS = --silent
LDFLAGS =
LT_LDFLAGS =
SH_LDFLAGS =
LIBS =
DEFS =
INCLUDES =
NOTEST_CPPFLAGS =
NOTEST_CFLAGS =
NOTEST_CXXFLAGS =
NOTEST_LDFLAGS =
NOTEST_LIBS =
EXTRA_CPPFLAGS = -DLINUX -D_REENTRANT -D_GNU_SOURCE
EXTRA_CFLAGS = -g -O2 -pthread
EXTRA_CXXFLAGS =
EXTRA_LDFLAGS =
EXTRA_LIBS =
EXTRA_INCLUDES = -I$(includedir) -I. -I/tmp/bob-nmedklac/httpd-2.4.51/srclib/apr/include -I/tmp/bob-nmedklac/httpd-2.4.51/srclib/apr-util/include
INTERNAL_CPPFLAGS =
LIBTOOL = /app/.heroku/php/share/apache2/build/libtool --silent
SHELL = /bin/bash
RSYNC = /usr/bin/rsync
SVN =
SH_LIBS =
SH_LIBTOOL = $(LIBTOOL)
MK_IMPLIB =
MKDEP = $(CC) -MM
INSTALL_PROG_FLAGS =
ENABLED_DSO_MODULES = ,authn_file,authn_core,authz_host,authz_groupfile,authz_user,authz_core,access_compat,auth_basic,reqtimeout,filter,mime,log_config,env,headers,setenvif,version,unixd,status,autoindex,dir,alias
LOAD_ALL_MODULES = no
APR_BINDIR = /app/.heroku/php/bin
APR_INCLUDEDIR = /app/.heroku/php/include/apache2
APR_VERSION = 1.6.3
APR_CONFIG = /app/.heroku/php/bin/apr-1-config
APU_BINDIR = /app/.heroku/php/bin
APU_INCLUDEDIR = /app/.heroku/php/include/apache2
APU_VERSION = 1.6.1
APU_CONFIG = /app/.heroku/php/bin/apu-1-config