<?php 

namespace CleanCodeStudio\ExtendLaravelCollections;


class CollectionMacros
{
  public function listify()
  {
  	/**
		 * @param String $property
		 * @param Integer $limit
		 *
		 * @return string
		 */
			function($property = false, $limit = false)
			{
			  $collection = ($property) ? $this->pluck($property) : $this;

			  $list = implode(',', $collection->all());

			  if(!$limit) return $list;


				 return (strlen($list) > $limit) ? substr($list, 0, $limit) . '...' : $list;
			};
    }
}