<?php
/**
 * Created by PhpStorm.
 * User: Antoine KERIBIN
 * Date: 20/12/2017
 * Time: 16:07
 */

namespace AppBundle\Commands;


use Symfony\Bridge\PhpUnit\Legacy\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ChargesEnRetardCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // Le nom de la commande (après bin/console)
            ->setName('app:latecharges')

            // the short description shown while running "php bin/console list"
            ->setDescription("Permet de consulter les charges restant à payer dont la date d'échéance est dépassée.")

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Rien de plus à dire, tout cela me semble clair')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Liste des charges en retard :',
            '=============================================',
            "'Id  |  Titre  |  Statut  |  Montant  |  date d'échéance   |  Utilisateurs concernés",
            '============================================='
        ]);

        $doctrine = $this->getContainer()->get('doctrine');
        $repoCharge = $doctrine->getEntityManager()->getRepository('AppBundle:charge');
        $charges = $repoCharge->getAllLateCharges();
        foreach ($charges as &$value) {
            $output->writeln("");
            $output->writeln($value->__toString());
        }
        unset($value);//permet de kill la variable
        $output->writeln("");
        $output->writeln("");
        $output->writeln("");
    }

}