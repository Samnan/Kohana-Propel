Kohana Module for Propel ORM
============================

## Introduction

This module makes it possible to use Propel ORM with Kohana 3.x in a few steps easily.

It has been tested with Kohana 3.2 on Windows with WAMP server, and should work with very little modifications on other systems/servers. 

## Dependencies / Requirements

Propel requires [Phing](http://www.phing.info/trac/) in order to generate it's required files and configuration. You will need to install Phing either using PEAR or manaully using instructions from the Phing website.

http://www.propelorm.org/documentation/01-installation.html

There are no other dependencies of this module.

### Installation

1. Download and extract the contents of this module inside Kohana modules/propel folder.
   (AS usual, you can name the propel module folder anything, as long as you use the same name in your bootstrap module definition).

2. Download [Propel ORM](http://www.propelorm.org/) and extract it completely inside the 'vendor' folder you created above.

    The final folder structure of the module will look something like this:
    
    read.md [classes] [schema] [vendor\propel\generator] [vendor\propel\runtime] init.php ...

3. [Configure Propel](#configure) as described in the next section, according to the requirements of your project.

4. [Generate Propel Models](#generatemodels) from the command line and enjoy using this nice & fast ORM in your project.  

<a id="configure"></a>
### Configuring Propel 

1. Edit 'schema/propel.bat' file and change the path to the php command processor, phing command line and propel folder (self explanatory).

2. Edit 'schema/runtime-conf.xml' and change your database configuration settings in the file.

3. Edit 'schema/build.properties' and change the database configuration settings in the file.

4. Done!

<a id="generatemodels"></a>
### Generate Propel Models

    * This process assumes you are including Propel in a project with existing database. If you are starting a brand new project with an empty database, then skip the step which involves reverse engineering the database)

1. Open a command line. Navigate to the modules folder of the project, and then inside propel/schema directory.
2. If you need to reverse engineer your existing database, run the following command.

         propel.bat reverse

   This will create 'schema.xml' file with information related to your database in the same folder.

3. Now run the following command to generate the model classes for your database.
        
         propel.bat
         
   This will create a couple of folders and some files inside 'build' directory (depending on the structure of your database).

4. Run the following command to generate Propel php configuration files.

         propel.bat convert-conf

   This generates two files in the schema/build/conf directory. Copy them to your application/config directory as per Kohana's convention (there is no need to change anything in those files).

5. That's it. Now you can start using Propel in your Kohana project by creating Models and performing queries.
   [Here is a link](http://propel.posterous.com/propel-query-by-example) that will give you a headstart on writing Propel queries.
   
<a id="troubleshooting"></a>
### Troubleshooting

If you enable the propel module for the first time, and you have not yet run the propel model and conf generator commands, Kohana will throw an exception. Make sure you run the convert-conf command at least once before you enable the module in your application.

If you encounter errors while running some of the commands above, then you are most likely missing the 'Phing' command on your system,
or you have setup your paths incorrectly in the 'propel.bat' file.
    