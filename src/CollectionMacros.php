<?php 

namespace CleanCodeStudio\ExtendLaravelCollections;


class CollectionMacros
{
    public function listify()
    {
    	/**
			 * @param bool $property
			 * @return string
			 */
			function($property = false)
			{
			    $collection = ($property) ? $this->pluck($property) : $this;

			    return implode(', ', $collection->all());
			};
    }
}