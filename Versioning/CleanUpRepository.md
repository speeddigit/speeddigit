
Installation: 
- Install JDK 
- Download BFG Jar from: https://repo1.maven.org/maven2/com/madgag/bfg/1.14.0/bfg-1.14.0.jar


Clean-up:

1. java -jar bfg-1.14.0.jar --strip-biggest-blobs 100  Inventory\.git --no-blob-protection
2. git reflog expire --expire=now --all && git gc --prune=now --aggressive


Troubleshoots:
Warning : no large blobs matching criteria found in packfiles - does the repo need to be packed?
Run: git gc