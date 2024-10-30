# Linux

## Einführung in Linux

### Einleitung
Nach Bearbeitung dieses Kapitels können Sie grundlegende Eigenschaften
von Linux Systemen verstehen.

## Eigenschaften

* Multi-User-Betrieb
  * Am System können mehrere Benutzer gleichzeitig arbeiten. Sie werden über den Benutzernamen unterschieden.

* Multi-Tasking

  * Am System können mehrere Programme gleichzeitig arbeiten.

* Timesharing

  * Programme  werden über Prioritäten verwaltet und bekommen abwechselnd die CPU(s).

* Interaktivität

  * Jeder Benutzer kann mit einem Terminal interaktiv arbeiten.

* Hierarchisches Dateisystem
  * Alle Dateien werden über eine Baumstruktur verwaltet.
  * Benutzerschnittstelle (Shell)
  * Der Benutzer kommuniziert mit Linux über eine Kommandosprache, die Shell heißt.

* grafische Benutzerschnittstelle(GUI)

  * z.B. via X11-Server, KDE und Gnome.

* Programmentwicklung

  * Unter Linux gibt es zahlreiche Werkzeuge zur Programmerstellung.

* Textverarbeitung

  * Unter Linux gibt es zahlreiche Programme zur Textverwaltung.

* Netzwerkunterstützung

  * Jedes Linux kann in einem TCP/IP Netzwerk arbeiten. Unterstützt netzwerkweite Dateisysteme (NFS), mail, Programme usw.

* Kernel

  * Kontrolliert die Hardware
  * Memory Management Unit
  * CPU Vergabe über Prioritäten
  * Geräte Ein/Ausgabe

* System Dienste

  * Arbeiten direkt mit dem Kernel zusammen
  * Die Systemdienste stehen als C-Programme zur Verfügung.

* Dienstprogramme

  * Komplexe Programme  als Linux Befehle

* Benutzerschnittstelle

  * Es stehen verschiedene  Shells zur Verfügung :
  * bash, zsh

* Grafische Benutzerschnittstelle

  * basierend auf X11: KDE, Gnome  und andere

![Linux-System](images/Betriebssystem.jpg "Graphische Darstellung des LINUX-Systems")

## Verwalten von Dateien Teil 1
### Einleitung

Nach Bearbeitung dieses Kapitels können Sie :

* Das Linux Dateisystem verstehen.
* Verzeichnisse, Dateien und Gerätedateien unterscheiden.
* Die wichtigsten Aufgaben zum Verwalten von Dateien durchführen.
* Dateibezeichnungen korrekt eingeben.

## Das Linux Dateisystem
### Der hierarchische Dateibaum
<!-- \index{Der Dateibaum im LINUX} -->

Alle Linux Dateien sind streng hierarchisch baumartig organisiert. Der
Ausgangspunkt des Dateibaums ist das `root` Directory `/`,
auch Stammverzeichnis genannt, das auf weitere Dateien oder
Verzeichnisse verweist. Es gibt keine Laufwerksbuchstaben.

Bei Linux gibt es Standardverzeichnisse in denen Dateien für spezielle
Aufgaben zusammengefasst sind. Wichtige Standardverzeichnisse und die
Aufgaben ihrer Dateien sind:

~~~~
Verzeichnis         kurze Beschreibung
/                   root-Verzeichnis (Basisverzeichnis)
/sbin/              Programme für den Systemverwalter
/bin/               allgemeine Kommandozeilen-Befehle (GNU-Programme)
/boot/              Verzeichnis für Startdateien und den Kernel
/dev/               Gerätedateien (für Tastatur, Maus, Modem, 
                    Festplatte, CDROM, ...)
/home/              Benutzerverzeichnisse
/root/              Verzeichnis des Systemverwalters
/tmp/               temporäre Dateien
/usr/               Dateien/Programme für die Benutzer
/usr/bin/           Anwendungsprogramme für die Benutzer
/usr/X11R6/bin/     Anwendungsprogramme für die grafische Oberfläche
/usr/src/           Quellcodes (z. B. vom Linux-Kernel)
/var/               Verzeichnis für sich ändernde Daten 
                    (Mailverzeichnis, Druckerspooler, ...)
/var/log/           Protokoll-Dateien
/proc/              Systeminformationen; Schnittstelle zum Kernel
/opt/               optionale Programme (teilweise KDE, Firefox)
/mnt/               Mount-Point für Disketten, CD-ROMs, etc...
/media              Mount-Point für externe Festplatten, USB-Sticks,
                    CD-ROMs usw.
/etc/               systemweite Konfigurationsdateien
/etc/init.d/        Start-/Stopscripte der Systemdienste
/etc/X11/           Konfigurationsdateien von xorg
/lib/               allgemeine Programm-Bibliotheken (Programmlader,
                    Hauptbibliothek glibc)
/usr/lib/           Programm-Bibliotheken für Anwendungsprogramme           
~~~~

Jeder User arbeitet zu jedem Zeitpunkt in einem
`Working Directory`, das er mit dem Befehl `cd`
(change Directory) ändern und mit dem Befehl `pwd` (print
Working Directory) ausgeben kann. Unter Linux können Verzeichnisse
deviceübergreifend auf beliebigen Datenträgern abgespeichert werden. Der
Systemadministrator bindet die Verzeichnisse an eine beliebige Stelle
des Dateibaumes ein (mount), wobei sich an der hierarchischen
Dateistruktur nichts ändert. Der User merkt auch nicht auf welcher
physikalischen Platte er momentan arbeitet. (Abfrage mit `df .`)

Eine aktuelle Zusammenfassung des hierarchischen Dateisystems findet
sich unter
<https://de.wikipedia.org/wiki/Filesystem_Hierarchy_Standard>

### Verzeichnisse, Dateien und Gerätedateien

In Linux gibt es

* gewöhnliche Dateien
  * Textdateien, am Terminal ausgebbar
  * Binärdateien, Programmdateien

* Verzeichnisse
  * Sammlung von anderen Dateien, die selbst Verzeichnisse sein können

* spezielle Dateien

Gerätedateien in denen die Routinen des Linux Kernels abgespeichert
sind, die die Ein- und Ausgabe auf physikalische Geräte realisieren.
Jedes Gerät hat für jede Schnittstelle ein eigenes Devicefile.

Wichtige Gerätedateien sind :

~~~~~
/dev/sd*       : Festplatten, allgemein Datenträger,
                 also auch usb-memory-sticks
/dev/hd*       : Festplatten, mit alten Treiber/p-ata
/dev/console   : System Konsole
/dev/tty01     : asynchrones Terminal
/dev/null      : Null-Device
/dev/sr*       : CD-Rom
/dev/zero      : Zero-Device
~~~~~

## Fallbeispiel zum Verwalten von Dateien
### Das Anlegen von Dateien
<!-- \index{Verwaltung von Dateien im LINUX!Das Anlegen von Dateien} -->

In den nächsten Kapiteln werden Datei- und Verzeichnisoperationen anhand
eines Fallbeispiels erklärt. Es gibt 3 Studenten: meier, huber und
schoch

Es ergibt sich folgende hierarchische Dateistruktur.

![](images/dateibaum.jpg "Hierarchische Dateistruktur von LINUX")
}

Zum Anlegen von Dateien gibt es unter Linux die Möglichkeit, die
Terminaleingabe in eine Datei umzuleiten (Befehl `cat`) oder
einen Texteditor aufzurufen. Achtung: Unter Linux werden ältere
Versionen von Dateien nicht automatisch gesichert, sondern stets
überschrieben.

~~~~~{.bash}
>pwd
/mounts/users/student/meier
~~~~~

Im Bereich Holzbau soll für den Dachbau eine neue Datei dach angelegt
werden:

~~~~~
>cat > text1.txt    : Schreibt Terminaleingabe in die Datei
                      text1.txt,
                      Beenden der Eingabe mit CTRL d
>touch text2.txt    : Kreiert eine leere Datei mit dem Namen
                      text2.txt
~~~~~

### Das Anzeigen von Inhaltsverzeichnissen
<!-- \index{Verwaltung von Dateien im LINUX!Das Anzeigen von Inhaltsverzeichnissen} -->

Der Inhalt des Verzeichnisses wird mit dem Befehl `ls`
ausgegeben:

wichtige Optionen des Befehls `ls`:

* `-a` listet auch die verborgenen Dateien (der Dateiname beginnt mit einem Punkt) im Verzeichnis auf.
* `-l` langes (ausführliches) Ausgabeformat

In jedem Verzeichnis gibt es immer die zwei verborgenen Dateien:

* `.` Zeigt auf das eigene Verzeichnis
* `..` Zeigt auf das Elternverzeichnis
* `-F` hängt dem Dateiname ein Metazeichen an, das den Dateityp anzeigt:

  * `\` für Verzeichnis
    * `*` für ausführbar


Beispiel: Benutzer huber nach dem einloggen:

~~~~~
>pwd    
/mounts/users/student/huber

>ls
briefe seminar text.txt

>ls -aF
./ ../ briefe/ seminar/ text.txt
~~~~~

### Länge und Zeichenkonventionen von Dateinamen

Bei Datei- und Verzeichnisnamen können mit 254 Bytes nicht unbedingt 254
Stellen genutzt werden. Sonderzeichen und Umlaute sind nach Möglichkeit
zu vermeiden aber nicht ausgeschlossen (Dateiname wird utf-8 codiert).
Groß- und Kleinschreibung wird unterschieden(case sensitiv). Ein Name
sollte nicht mit einem Punkt (nur bei explixiter verborgener Datei) oder
mit einem Minus beginnen (Name könnte als Befehlsoption behandelt
werden). Im Dateinamen sollte kein `*` stehen.

Wenn sich Sonderzeichen nicht vermeiden lassen, müssen sie mit
besonderer Sorgfalt eingegeben werden:

z.B. `\` für Space.

Der Schrägstrich `/` ist verboten da er als Trenner im Pfadnamen fungiert.

### Das Löschen von Dateien
<!-- \index{Verwaltung von Dateien im LINUX!Das Löschen von Dateien} Unter -->

Linux können Dateien (Befehl
`rm`) und Verzeichnisse mit ihren Unterverzeichnissen (Befehl `rm
-r`) gelöscht werden.


Beispiel: Es sollen die Datei text.txt und das Verzeichnis `seminar` mit allen  Dateien gelöscht werden:

~~~~~
>pwd
/mounts/users/student/huber
>rm text.txt
>rm -r seminar
~~~~~

Um Dateien zu entfernen, deren Namen mit `-` beginnen, z.B. `foo`,
verwenden Sie eine der folgenden Anweisungen:

~~~~~
>rm -- -foo
>rm ./-foo
~~~~~


### Das Anzeigen von Dateien

<!-- \index{Verwaltung von Dateien im LINUX!Das Anzeigen von Dateien} Jede -->

Textdatei kann am Bildschirm mit automatischem Scrolling (Befehl
`cat`) oder bildschirmweise (Befehl `less, more`)
ausgegeben werden :

~~~~~
>pwd
/mounts/users/student/huber
~~~~~

Ausgabe der Datei Fenster am Bildschirm

automatisches Scrolling:

~~~~~
>cat text.txt
~~~~~

bildschirmweise:

~~~~~
>more text.txt
~~~~~

bildschirmweise, mit verbesserter Positioniermöglichkeit als more:

~~~~~
>less text.txt
~~~~~

### Das Verwalten von Verzeichnissen
<!-- \index{Verwaltung von Dateien im LINUX!Das Verwalten von Verzeichnisse} -->

Innerhalb von Verzeichnissen können beliebige neue Verzeichnisse kreiert
(Befehl `mkdir`) oder, falls sie leer sind,  gelöscht (Befehl `rmdir`)
werden. Der Benutzer kann jedes Verzeichnis zu seinem Working Directory
machen (Befehl `cd`).

Beispiel: das momentane Verzeichnis ist :

~~~~~
>pwd 
/mounts/users/student/huber
~~~~~


Ein Verzeichnis loesungen soll kreiert werden:

~~~~~
>mkdir loesungen
~~~~~


Das Working Directory soll auf loesungen gesetzt werden:

~~~~~
>cd loesungen
~~~~~


Der Benutzer will in sein Home Verzeichnis springen:
~~~~~
>cd
~~~~~

### Relative und absolute Datei- oder Verzeichnisbezeichnungen
<!-- \index{Relative und absolute Datei- oder Verzeichnisbezeichnungen} Linux -->

kann Dateien über relative oder absolute Dateibezeichnungen ansprechen.
Während absolute Dateinamen die Dateihierarchie, ausgehend vom
Rootdirectory im Namen auflisten, beginnt die Auflistung der
Unterverzeichnisse bei relativen Bezeichnungen erst ab dem momentanen
Working Directory.

~~~~~
>pwd 
/mounts/users/student/huber
~~~~~


absolute Dateibezeichnung:
~~~~~
>ls /mounts/users/student/huber/briefe
~~~~~


relative Dateibezeichnung:
    
~~~~~
>ls briefe
~~~~~

### Das Kopieren und Umbenennen von Dateien
<!-- \index{Verwaltung von Dateien im LINUX!Das Kopieren und Umbenennen von Dateien} -->

Unter UNIX kann eine Datei in eine andere kopiert werden (Befehl
`cp`). Dabei werden bestehende Dateien überschrieben. Mehrere Dateien können mit einem `cp`
Befehl nur in Verzeichnisse kopiert werden. Sollen die Namen von Dateien
oder Verzeichnissen geändert werden, so gibt es unter UNIX den Befehl
`mv` (=move).

~~~~~
>pwd 
/mounts/users/student/huber
~~~~~

Alle Dateien und alle Unterverzeichnisse aus dem Verzeichnis seminar/ sollen in das Verzeichnis seminar\_alt/ kopiert werden:

~~~~~
>cp -r seminar seminar_alt
~~~~~ 


Alle Dateien aber keine Unterverzeichnisse aus dem Verzeichnis `seminar/` sollen in das Verzeichnis `letzte/` kopiert werden:

~~~~~
>mkdir letzte
>cd seminar
>cp * ../letzte 
~~~~~


Alle Dateien und alle Unterverzeichnisse aus dem Verzeichnis letzte/ im Verzeichnis seminar/ sollen in das neue Verzeichnis /sicherung kopiert werden:

~~~~~
>mkdir ../sicherung
>cp -r ../letzte/seminare  ../sicherung
~~~~~


Das Verzeichnis letzte soll in `aller_letzte` umbenannt werden:

~~~~~
>mv letzte aller_letzte
~~~~~



## Dateinamen und der Einsatz von Wildcards
### Einsatz von Wildcards
Um in einem Befehl mehrere Verzeichnisse oder Dateien anzusprechen,
können in den Namen Wildcards verwendet werden.

Wichtige Wildcards sind ***** (steht für alles, außer einem Punkt
am Anfang der Datei) und ? (steht für einen Buchstaben)


~~~~~
>pwd
/mounts/users/student/huber
~~~~~


Alle Dateien in allen Verzeichnissen, in deren Namen einf vorkommt,  sollen aufgelistet werden :
~~~~~
>ls */*/*einf*
~~~~~


Alle Dateien, die einen sechs Buchstaben langen Namen haben, sollen aufgelistet werden :
~~~~~
>ls */*/??????
~~~~~

### Verwendung von Sonderzeichen

Bestimmte Sonderzeichen in Dateinamen werden von der Shell interpretiert
und zur Dateinamengenerierung verwendet.

\begin{tabularx}{\textwidth}{l X}
\textbackslash{}c & Aufheben der Dateinamen Generierung für den nachfolgenden Buchstaben c\\
\textbackslash{}  & am Ende Eine Zeile fordert eine Folgezeile\\
`   ` & Aufheben der Dateinamenexpandierung für den eingeschlossenen String\\
tilde (\~{})& Die bash (Shell) ersetzt die tilde durch das Homedirectory
\end{tabularx}

Ein Dateinname enthät ein Leerzeichen : Kreieren der Datei Mathe V1

~~~~~
>cat > "Mathe V1"
~~~~~


Kreieren und Ansprechen der Datei Mathe*
~~~~~
>cat > Mathe*
>ls Mathe*
~~~~~

## Das Wichtigste in Kürze
<!-- \index{Konvention für Dateinamen} -->

* Das Linux Dateisystem ist ein hierarchisches,
  baumartiges Dateisystem, bei dem Verzeichnisse Device-übergreifend
  abgespeichert sein können. Das oberste Verzeichnis heißt root Directory.
* In Linux gibt es gewöhnliche Dateien, Verzeichnisse (Directories)
  und spezielle Dateien (Device Files). Je nach Aufgaben sind sie in
  Standardverzeichnissen abgespeichert. * Datei und Verzeichnisnamen
  dürfen 254 Bytes lang sein, Groß- und Kleinbuchstaben werden
  unterschieden, Wildcards \lstinline|(*,?,\,~)| werden unterstützt.
* Zu jedem Zeitpunkt befindet sich der User in einem Working
  Directory, das er mit `pwd` ausgeben und mit `cd`
  ändern kann. * Datei- und Verzeichnisbezeichnungen können absolut
  (beginnend beim root Directory) und relativ (beginnend beim Working
  Directory) angegeben werden. * Der User kann Dateien anlegen (Befehl
  `cat`), am Terminal anzeigen (Befehl `cat`),
  kopieren (Befehl `cp`), umbenennen (Befehl `mv`) und
  löschen (Befehl `rm`). * Mehrere Dateien können nur in
  ein Verzeichnis kopiert werden. Verzeichnisse können neu angelegt
  (Befehl
  `mkdir`) und falls falls sie leer sind, können Sie mit dem Befehl `rmdir`,
  sonst mit dem Befehl `rm -r` gelöscht werden. * Beim
  Kopieren und Umbenennen von Dateien verwaltet Linux keine alten
  Versionen von Dateien, sondern überschreibt sie.


## Tipps für die Praxis


* **Gemeinsame Optionen -i, -r, -f bei Dateioperationen**
  * Bei den Befehlen rm, cp und mv haben die Optionen -i, -r und -f die gleiche Funktionalität:
    * `-i` (interactive), fragt den Benutzer bevor eine Datei überschrieben wird.
    * `-r` (recursiv) Bei der Dateinamengenerierung werden auch Dateinamen aus den Unterdirectories generiert.
    * `-f` (force) Keine Nachfragen.

* **Wildcard `*` und die Option `-R` beim `ls` Befehl**

Wird `ls *` aufgerufen, so werden auch die Inhalte aller
Unterverzeichnisse ausgegeben. `ls -d *` listet nur die Namen der
Verzeichnisse auf.

Die Option `-R` listet den Inhalt und den Namen aller Verzeichnisse und
Unterverzeichnisse auf.

* **More Befehl in Pipes**

Erzeugt ein Befehl eine Terminalausgabe, die länger als eine
Bildschirmseite ist, so kann die Ausgabe, auf den less Befehl
"gepiped", also bildschirmweise ausgegeben werden. `ls * | less`

* **Automatische Dateinamengenerierung bei Kommanodaufrufen.**

Bei allen Kommandoaufrufen ist die automatische Dateinamengenerierung
der Shell eingeschaltet:

`cd semin*` ist äquivalent zu `cd seminar`.

Die Kommandozeile kann auch durch die Tabulatortaste automatisch
vervollständigt werden.

`cd sem <tab>` wird zu `cd seminar`, falls es nur
ein Verzeichnis mit sem beginnend gibt, anderenfalls erscheint nur ein
Teilstück bzw. beim zweiten Drücken von `<tab>` eine Auswahl.

* **Verhindern des automatischen Löschens oder Überschreibens von Dateien**

Da Linux alte Versionen von Dateien defaultmäßig überschreibt, empfiehlt
es sich für die Befehl `mv, cp` und `rm` alias
Definitionen mit der interactive Option einzuführen. Die alias
Definitionen werden mit der Option `-f` überschrieben.

~~~~~
alias   rm  rm -i
alias   cp  cp -i
alias   mv  mv -i
~~~~~

* **Wildcards bei Verborgenen Dateien**

Wildcards in einem Dateinamen generieren keinen Dateinamen der mit einem
Punkt beginnt (=Verborgene Datei).

Abhilfe: `ls .*`

# Editieren von Texten
<!-- \index{Texte Editieren mit Kate im LINUX} -->

## Einleitung

Unter Linux gibt es mehrere Editoren mit verschiedenen Eigenschaften für
unterschiedliche Einsatzgebiete :

* vi:Fullscreen Editor, umschaltbar in den ex-Editor-Modus
* emacs: wichtiger GNU GPL Editor unter LINUX mit Arbeitsumgebung
* kate: ist ein freier Texteditor für Programmierer.

Diese drei Editoren haben verschiedene technische Bedingungen für die
Nutzung. Der vi läuft in jeder Konsole (Textmodus, xterm). Der emacs
kann sowohl in der Konsole laufen mit der Option `-nw`, als auch im
grafischen Modus. Kate dagegen läuft nur im Grafikmodus, genauer mit
Hilfe von KDE-Bibliotheken auf X11 aufsetzend.

Ein weiteres Beispiel für einen simplen Editor in der Textkonsole ist
mcedit. Gedit ist ein weiterer Editor im Grafikmodus.

### In diesem Kapitel lernen Sie:

* Aufrufen von kate
* Die Fenster von kate
* Die Menüeinträge von kate
* Erstellen einer neuen Datei
* Spezielle Kommandos zum praktischen Gebrauch

Aus dem Handbuch zu kate:

<http://docs.kde.org/stable/de/kdesdk/kate/fundamentals.html#starting-kate>

## Aufrufen des kate Editors

kate wird vom K-Menü oder von der Befehlszeile aufgerufen.

### Vom K-Menü

Das KDE $\rightarrow$ Programmmenü wird durch Klicken auf den großen
K-Knopf oder das jeweilige Symbol der Linux Version links unten auf dem
Bildschirm in der Werkzeugleiste geöffnet. Zeigen Sie mit der Maus auf
den Menüpunkt Programme, Dienstprogramme, Editoren. Es erscheint eine
Liste der verfügbaren Editoren. Wählen Sie kate (auch aufgeführt als
erweiterter Texteditor). kate lädt die zuletzt bearbeiteten Dateien,
außer Sie haben eingestellt, dass dies nicht der Fall sein soll. Sehen
Sie unter "Einstellungen - kate einrichten" nach, wie Sie diese
Funktion ein- und ausschalten können.

### Von der Befehlszeile
Sie können kate auch von der Befehlszeile starten. Wenn Sie dabei
gleichzeitig einen Dateinamen angeben, wird diese Datei durch kate
geöffnet oder erzeugt.

### Verschiedene Modi von kate:
#### Textdatei
Mit Hilfe von kate kann man eine Textdatei erstellen indem man beim
Speichern oder Erstellen die Endung `.txt` hinzufügt.

### .perl Datei
Kate sieht eine Perldatei durch den Header
`\#!/usr/bin/perl`, um es übersichtlicher zu machen fügt man
beim Speichern noch die Endung `.perl` dazu.

### Sitzungen:

Sitzungen erlauben Ihnen mehrere Listen von Dokumenten und Einstellungen
für das Benutzen in kate zu speichern. Sie können beliebig viele
Sitzungen speichern, und Sie können unbenannte oder anonyme Sitzungen
für das einmalige Bearbeiten von Dokumenten verwenden.

### Neue Sitzung:

Wenn Sie eine neue Sitzung starten, dann wird das Dialogfenster für die
Standardsitzung geöffnet. Zum Speichern der Fenstereinstellungen in der
Standardsitzung müssen Sie das Feld "Fenstereinstellungen einbeziehen" auf der Karte
"Sitzungsverwaltung" unter
"Einstellungen - kate einrichten" einschalten, dann die
Standardsitzung laden, die Fenstereinstellungen anpassen und die Sitzung
speichern.

### Letzte Sitzung:
Wenn sie auf "Sitzung öffnen" klicken so wird die alte von Ihnen
verwendete Sitzung geöffnet mit allen Fenstern, Verzeichnissen und
Dateien mit denen schon gearbeitet wurde. Im Editorbereich erscheint die
letzte bearbeitete Datei.

Beispiel: Kate: Öffnen einer bestehenden Datei

~~~~~
kate Dateiname.txt
kate datei.perl
~~~~~

### Erstellen einer neuen Datei

Es gibt 2 Möglichkeiten mit Hilfe von kate eine Datei zu erstellen:


* In der Befehlszeile wird der Name einer neuen Datei angegeben:

~~~~~
kate neuedatei.perl
~~~~~

Die Datei wird im Verzeichnis Documents angelegt. Daher ist es empfehlenswert die zweite  Möglichkeit vorzuziehen um alle z.B. Perldateien in einem extra Verzeichnis zur Verfügung zu haben.

* Kate aufrufen: `kate`

* Datei $\rightarrow$ Neu

kate ünterstützt das Drag-and-Drop-Protokoll von KDE. Dateien können
gezogen und auf kate abgelegt werden; von der Arbeitsoberfläche,
Dolphin, oder einer FTP-Seite, die in einem Dolphin-Fenster geöffnet
ist.

### Die Fenster des kate Editors

<!-- % (hier Bild kate.jpg vom Kapitel2 aus Einführung in die
Programmierung)++++ -->

![Kate](images/kate.jpg "Kate Editor")

Kate ist in verschiedene Bereiche geteilt : Das **Hauptfenster**
von kate ist ein Standard-KDE-Anwendungsfenster mit einer zusätzlichen
Seitenleiste, die Werkzeugansichten enthält. Es hat eine Menüleiste mit
den Standardmenüs und einigen mehr, sowie eine Werkzeugleiste mit
Knöpfen für oft benutzte Befehle.

Der wichtigste Teil des Fensters ist der **Editorbereich**, der
standardmäßig einen Texteditor anzeigt, in dem Sie Ihr Dokument
bearbeiten können.

Die **Dokumentenliste** zeigt alle aktuell in Kate geöffneten
Dateien an. Dateien, die noch nicht gesicherte Änderungen enthalten,
werden mit einem kleinen DiskettenSymbol links neben dem Dateinamen
gekennzeichnet.

Wenn zwei oder mehrere Dateien mit dem selben Namen (in verschiedenen
Verzeichnissen) geöffnet sind, wird an die Namen eine Zahl angehängt z.
B. `$<2>$` usw. Für die Auswahl der gewünschten Datei wird ihr Name
einschließlich Pfad in der Kurzinfo angezeigt.

Wenn Sie ein Dokument aus der Liste aktiv machen wollen, klicken Sie
einfach auf den Namen des Dokuments in der Liste.

Die Dokumentenliste stellt standardmäßig die Einträge farbig dar: Die
Einträge der zuletzt bearbeiteten Dokumente werden mit einer
Hintergrundfarbe hervorgehoben, Dokumente, die tatsächlich bearbeitet
wurden, werden durch eine zusätzlich eingeblendete Farbe hervorgehoben.
Das Dokument, das zuletzt bearbeitet wurde, hat die stärkste Farbe, so
dass Sie die Dokumente, an denen Sie aktuell arbeiten, einfach finden
können. Diese Hervorhebungen können Sie im Einrichtungsdialog für die
Dokumentliste einrichten.

Der **Dateisystem-Browser** ist ein Verzeichnisanzeiger, von dem
aus Sie Dateien im aktuell angezeigten Verzeichnis öffnen können.

Von oben nach unten besteht der Dateisystem-Browser aus folgenden
Elementen:

Einer Werkzeugleiste, diese enthält Standardnavigationsknöpfe zum
schnellen Wechsel der Verzeichnisse.

Die Standardposition der Dokumentliste sowie vom Dateisystem-Browser ist
links vom Editorbereich im Kate-Fenster. Der eingebaute
Terminal-Emulator ist eine Kopie der KDE-Anwendung Konsole, er ist durch
Wählen von Fenster $\rightarrow$ Werkzeugansichten $\rightarrow$
Terminal anzuzeigen oder einfach durch Drücken der Taste F7 aufrufbar
und bekommt beim Einschalten den Fokus. Wenn die Option
"Automatisch mit dem aktuellen Dokument abgleichen" im Feld
"Einstellungen" von Kate einrichten eingeschaltet ist, wird das
Verzeichnis des Terminal-Emulators in das Herkunftsverzeichnis der
aktuellen Datei umgeschaltet, wenn dies möglich ist.

Die Standardposition ist unten im Kate-Fenster, unterhalb des
Editorfensters.

## Wichtige Menüeinträge
### Das Menü Datei

* Datei $\rightarrow$ Neu (Strg+N)
  * Dieser Befehl startet eine neue Datei im Editorfenster. In der Dateiliste links wird die neue Datei als "Unbenannt" bezeichnet.
* Datei $\rightarrow$ Öffnen (Strg+O)
  * Öffnet das Standard-KDE Dialogfenster, das das Öffnen einer oder mehrerer Dateien erlaubt. 
* Datei $\rightarrow$ Zuletzt geöffnete Dateien 
  * Dieser Befehl öffnet ein Untermenü mit einer Liste der zuletzt bearbeiteten Dateien. Sie können daraus direkt eine dieser Dateien öffnen. 
* Datei $\rightarrow$ Öffnen mit
  * Dieses Untermenü enthält eine Liste mit Anwendungen, die den MIME-Typ des aktuellen Dokumentes verarbeiten können. Das Klicken auf einen Eintrag öffnet das aktuelle Dokument mit dieser Anwendung.
  * Weiterhin gibt es einen Eintrag "Sonstige". Dieser Befehl öffnet ein Dialogfenster, in dem Sie eine andere Anwendung auswählen können, in der die aktive Datei geöffnet werden soll. Die aktive Datei bleibt weiterhin in Kate geöffnet.
* Datei $\rightarrow$ Speichern (Strg+S)
  * Dieser Befehl speichert Ihre Datei. Benutzen Sie ihn oft. Solange die Datei noch den Namen Unbenannt trägt, wird automatisch anstelle von Speichern der Befehl "Speichern unter" ausgeführt.
* Datei $\rightarrow$ Speichern unter
  * Mit diesem Befehl benennen Sie Dateien oder benennen diese um. Es wird das Dialogfenster zum Speichern einer Datei aufgerufen. Dieses Dialogfenster funktioniert genauso wie das Dialogfenster zum Öffnen einer Datei. Sie können sich durch das Dateisystem bewegen, eine Vorschau von vorhandenen Dateien ansehen oder Masken zur Dateiauswahl benutzen. 
  * Geben Sie den Namen, den Sie der Datei geben wollen, in das Feld ein und klicken Sie auf OK. Achten Sie dabei auch auf die Kodierung.

### Das Menü Bearbeiten

* Bearbeiten $\rightarrow$ Überschreibmodus (Einfg)
  * Schaltet zwischen den beiden Arten des Eingabemodus um. Wenn der Modus EINF ist, dann setzen Sie die eingegebenen Zeichen an der Stelle des Cursors ein. Wenn der Modus Überschr. ist, dann ersetzt jedes eingegebene Zeichen ein Zeichen rechts vom Cursor. Die Statusleiste zeigt den aktuellen Status des Auswahlmodus an, entweder EINF oder Überschr.

### Das Menü Ansicht

* Ansicht $\rightarrow$ Zeilennummern anzeigen (F11)
  * Mit diesem Eintrag wird ein zusätzlicher Rand an der linken Seite des aktiven Rahmens ein- oder ausgeschaltet, der Zeilennummern anzeigt.

### Das Menü Extras

* Extras $\rightarrow$ Terminal mit aktuellem Dokument synchronisieren
  * Diese Option bewirkt, dass der eingebaute Terminal-Emulator immer mit cd zum Ordner des aktuellen Dokuments wechselt, wenn ein neues Dokument geöffnet wird oder zu einem anderen Dokument umgeschaltet wird.
* Extras $\rightarrow$ Kodierung 
  * Sie können die Standardeinstellung für die Kodierung, die in Einstellungen $\rightarrow$ Kate einrichten ... Öffnen/Speichern festgelegt ist, für dieses Dokument hier verändern.
* Extras $\rightarrow$ Kommentar
  * Dies fügt das Zeichen für eine Kommentarzeile und ein Leerzeichen an den Zeilenanfang der aktuellen Zeile oder der aktuellen Auswahl hinzu.
* Extras $\rightarrow$ Kommentar entfernen
  * Dies entfernt das Zeichen für eine Kommentarzeile und ein Leerzeichen (sofern vorhanden) am Zeilenanfang der aktuellen Zeile oder der aktuellen Auswahl.
* Extras $\rightarrow$ Großschreibung
  * Der ausgewählte Text oder der Buchstabe nach dem Cursor wird in Großschreibung gesetzt.
* Extras $\rightarrow$ Kleinschreibung
  * Der ausgewählte Text oder der Buchstabe nach dem Cursor wird in Kleinschreibung gesetzt.
* Extras $\rightarrow$ Großschreibung am Wortanfang
  * Setzt den ausgewählten Text oder das aktuelle Wort in Großbuchstaben.

## Spezielle Kommandos zum praktischen Gebrauch 
**Strg+Z** Abbrechen und Rückgängigmachen eines kate Kommandos.

**Strg+S** Speichern der aktuellen Datei im aktuellen Zustand.

**Strg+Q** Beenden - Aktives Editorfenster schließen.

## Andere Editoren
**SED**: Der sed ist ein batchorientierter Editor. Die Editor
Kommandos werden in der Aufrufzeile oder in Scriptfiles eingegeben. Der
sed arbeitet die Befehle sequentiell ab und schreibt das Ergebnis des
Editierens auf das Terminal.

Aufruf :
~~~~~
sed [-n] -f scriptfile [file-list]
sed -n scriptfile [file-list]
~~~~~

~~~~~
sed s/abc/def/d  test
~~~~~

ersetzt den string abc durch den string def in jeder Zeile des Files  test

~~~~~
sed -f script-file test
~~~~~

bearbeitet den File test mit den Kommandos aus script

**GNU - EMACS**: Er ist ein freier (GPL) fullscreen Editor, der für
zahlreiche Linux Systeme implementiert ist. Er bietet eine komplexe
Arbeitsumgebung zum gleichzeitigen Editieren, Programmerstellen und
Arbeiten mit der Shell. Außerdem erlaubt er dem Benutzer, eine eigene
Editorumgebung mit LISP ähnlichen Befehlmacros zu erstellen. \emptyline
\section{Verwaltung von Dateien Teil 2}

## Die einzelnen Merkmale einer Datei 
### Die Dateimerkmale im Überblick 
Der Befehl `ls -lisg` listet alle Dateimerkmale :
![Dateimerkmale](images/datei.jpg "Dateimerkmale im Überblick")

<!-- % (hier das BILD datei.jpg) -->

## Gruppen und Owner

* Jedem Benutzer wird unter Linux in der Datei `/etc/passwd` eine eindeutige Benutzer- (Benutzer ID) und eine Gruppennummer (Gruppen ID) zugeordnet.

Der UNIX Befehl `id` gibt die Benutzer und
Gruppeneinstellungen an.
~~~~~
>id
~~~~~

* In einer Gruppe können mehrere Benutzer zusammengefasst werden.
* Unter Linux kann jeder Benutzer Mitglied mehrerer Gruppen sein.
* In der Datei `/etc/group` wird festgelegt, welcher Benutzer zu welcher Gruppe gehört. Außerdem wird in dieser Datei für den Gruppen ID ein symbolischer Name definiert.
* Der Loginname ist der symbolische Name für den Benutzer ID.
* Benutzer IDs liegen zwischen 0 und 65535, wobei 0 für den Superuser reserviert ist. Die Nummern 1-99 sind ebenfalls reserviert.

### Zugriffsrechte unter Linux 
<!-- \index{Zugriffsrechte unter Linux|(} -->

Unter Linux werden folgende drei Klassen von Benutzern unterschieden :

\begin{tabularx}{\textwidth}{cX}
u & : user, gleicher User ID\\
g & : group, gleicher Gruppen ID\\
o & : beliebiger User - und Gruppen ID\\
\end{tabularx}
Für jede dieser drei Benutzerklassen werden drei verschiedene Arten von
Zugriff unterschieden :

\begin{tabularx}{\textwidth}{cX}
r &: Lesender Zugriff\\
w &: Schreibender Zugriff\\
x &: Ausführender Zugriff\\
\end{tabularx}
Je nach Art der Datei haben die Zugriffsrechte verschiedene Bedeutungen
:

\begin{table}[htbp!]\center\tt
\begin{tabularx}{\textwidth}{|l|X|X|X|}
\hline
Dateiart & read & write & execute\\
\hline \hline
Gerätedatei & darf vom Gerät lesen & darf auf Gerät schreiben & --------\\
Verzeichnis & auf Dateien darf zugegriffen werden & Dateien im Verzeichnis dürfen gelöscht werden & In das Verzeichnis darf mit cd  gesprungen werden\\
normale Datei & lesen erlaubt & ändern erlaubt & ausführen erlaubt\\
\hline
\end{tabularx}
\caption{Bedeutungen von Zugriffsrechten} 
\end{table}

### Strategie zum Test der Zugriffsrechte bei Dateien
![Zugriffsrechte](images/benutzerid.jpg "Zugriffsrechte bei Dateien")



### Ändern der Zugriffsrechte
Die Zugriffsrechte einer Datei können mit symbolischen Werten oder mit
einer Protectionmaske geändert werden.

Ändern mit symbolischen Werten :

~~~~~
chmod  u <op> rwx   dateiname oder Verzeichnisname
chmod  g <op> rwx   dateiname oder Verzeichnisname
chmod  o <op> rwx   dateiname oder Verzeichnisname
chmod  a <op> rwx   dateiname oder Verzeichnisname

u : user, g : group, o : other, a : all

<op> ... =  explizites Setzen des angegebenen Rechts
<op> ... -  wegnehmen des angegebenen Rechts
<op> ... +  dazunehmen des angegebenen Rechts
~~~~~


~~~~~
chmod a+r test
~~~~~

: alle erhalten das Recht zum Lesen

~~~~~
chmod ug+wx test
~~~~~
: User und Gruppe erhält das Recht zum Schreiben und Ausführen %


Ändern mit einer Oktalzahl/Maske :

Der Befehl lautet:

~~~~~
chmod maske dateiname
~~~~~
