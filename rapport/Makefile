# Makefile pour compiler le rapport LaTeX

# Commande de compilation LaTeX avec l'option -shell-escape
LATEX = pdflatex -shell-escape

# Nom du fichier LaTeX principal
MAIN = rapport-elumalai-tarmat

all: $(MAIN).pdf

$(MAIN).pdf: $(MAIN).tex
	$(LATEX) $(MAIN).tex
	$(LATEX) $(MAIN).tex

clean:
	rm -f *.aux *.log *.out *.pdf

