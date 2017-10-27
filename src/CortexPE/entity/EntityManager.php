<?php

declare(strict_types=1);

namespace CortexPE\entity;

use CortexPE\entity\projectile\Egg;
use CortexPE\entity\projectile\EnderPearl;
use CortexPE\entity\projectile\Snowball;
use CortexPE\item\ItemManager;
use pocketmine\entity\Entity;

class EntityManager extends Entity{
	public static function init() : void{
		self::registerEntity(Bat::class, false, ['Bat', 'minecraft:bat']);
		self::registerEntity(Blaze::class, false, ['Blaze', 'minecraft:blaze']);
		self::registerEntity(CaveSpider::class, false, ['CaveSpider', 'minecraft:cavespider']);
		self::registerEntity(Chicken::class, false, ['Chicken', 'minecraft:chicken']);
		self::registerEntity(Cow::class, false, ['Cow', 'minecraft:cow']);
		self::registerEntity(Creeper::class, false, ['Creeper', 'minecraft:creeper']);
		self::registerEntity(Donkey::class, false, ['Donkey', 'minecraft:donkey']);
		self::registerEntity(ElderGuardian::class, false, ['ElderGuardian', 'minecraft:elderguardian']);
		self::registerEntity(EnderDragon::class, false, ['EnderDragon', 'minecraft:enderdragon']);
		self::registerEntity(Enderman::class, false, ['enderman', 'minecraft:enderman']);
		self::registerEntity(EnderPearl::class, false, ['EnderPearl', 'minecraft:enderpearl']);
		self::registerEntity(Evoker::class, false, ['Evoker', 'minecraft:evoker']);
		self::registerEntity(Ghast::class, false, ['Ghast', 'minecraft:ghast']);
		self::registerEntity(Guardian::class, false, ['Guardian', 'minecraft:guardian']);
		self::registerEntity(Horse::class, false, ['Horse', 'minecraft:horse']);
		self::registerEntity(Husk::class, false, ['Husk', 'minecraft:husk']);
		self::registerEntity(IronGolem::class, false, ['IronGolem', 'minecraft:irongolem']);
		self::registerEntity(Lightning::class, false, ['Lightning', 'minecraft:lightning']);
		self::registerEntity(Llama::class, false, ['Llama', 'minecraft:llama']);
		self::registerEntity(MagmaCube::class, false, ['MagmaCube', 'minecraft:magmacube']);
		self::registerEntity(Mooshroom::class, false, ['Mooshroom', 'minecraft:mooshroom']);
		self::registerEntity(Mule::class, false, ['Mule', 'minecraft:mule']);
		self::registerEntity(Ocelot::class, false, ['Ocelot', 'minecraft:ocelot']);
		self::registerEntity(Pig::class, false, ['Pig', 'minecraft:pig']);
		self::registerEntity(PigZombie::class, false, ['PigZombie', 'minecraft:pigzombie']);
		self::registerEntity(PolarBear::class, false, ['PolarBear', 'minecraft:polarbear']);
		self::registerEntity(Rabbit::class, false, ['Rabbit', 'minecraft:rabbit']);
		self::registerEntity(Sheep::class, false, ['Sheep', 'minecraft:sheep']);
		self::registerEntity(Shulker::class, false, ['Shulker', 'minecraft:shulker']);
		self::registerEntity(Silverfish::class, false, ['Silverfish', 'minecraft:silverfish']);
		self::registerEntity(Skeleton::class, false, ['Skeleton', 'minecraft:skeleton']);
		self::registerEntity(Skeleton::class, false, ['Skeleton', 'minecraft:skeleton']);
		self::registerEntity(Slime::class, false, ['Slime', 'minecraft:slime']);
		self::registerEntity(SnowGolem::class, false, ['SnowGolem','minecraft:snowgolem']);
		self::registerEntity(Spider::class, false, ['Spider', 'minecraft:spider']);
		self::registerEntity(Stray::class, false, ['Stray', 'minecraft:stray']);
		self::registerEntity(Vex::class, false, ['Vex', 'minecraft:vex']);
		self::registerEntity(Vindicator::class, false, ['Vindicator', 'minecraft:vindicator']);
		self::registerEntity(Witch::class, false, ['Witch', 'minecraft:witch']);
		self::registerEntity(Wither::class, false, ['Wither', 'minecraft:wither']);
		self::registerEntity(WitherSkeleton::class, false, ['WitherSkeleton', 'minecraft:witherskeleton']);
		self::registerEntity(Wolf::class, false, ['Wolf', 'minecraft:wolf']);
		self::registerEntity(ZombieHorse::class, false, ['ZombieHorse', 'minecraft:zombiehorse']);
		self::registerEntity(ZombieVillager::class, false, ['ZombieVillager', 'minecraft:zombievillager']);

		// Overwrite
		self::registerEntity(Snowball::class, true, ['Snowball', 'minecraft:snowball']);
		self::registerEntity(Egg::class, true, ['Egg', 'minecraft:egg']);
	}
}